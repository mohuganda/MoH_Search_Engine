<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;
use App\Models\Log;
use App\Jobs\SearchLogJob;
use App\Models\AccessLog;

class SearchRepository
{


	function getAllItems(Request $request)
	{

		$term = $request->term;
		$area = $request->area;
		$type = $request->type;

		if ($term) {

			$query = Item::where('title', 'like', '%' . $term . '%')
				->orWhere('description', 'like', '%' . $term . '%')
				// ->orWhere('access_method', 'like', '%' . $term . '%')
				// ->orWhere('url_link', 'like', '%' . $term . '%')
				// ->orWhere('department', 'like', '%' . $term . '%')
				// ->orWhere('hosting_organiation', 'like', '%' . $term . '%')
				// ->orWhere('title', 'like', '%' . rephrase($term, 5) . '%')
				// ->orWhere('description', 'like', '%' . rephrase($term) . '%')
				->where('published', 1)

				->orderBy('title', 'asc');



			if (intval($type) > 0)
				$query = $query->where('item_type_id', $type);


			if (intval($area) > 0)
				$query = $query->whereIn('id', get_area_items($area));

			if (intval($type) > 0)
				$query = Item::where('item_type_id', $type);
		} else {


			if ($area) {
				$query = Item::whereIn('id', get_area_items($area));

				if (intval($type) > 0)
					$query = Item::where('item_type_id', $type);
			} else if (intval($type)) {

				if (intval($type) > 0)
					$query = Item::where('item_type_id', $type);
			} else {
				$query = Item::where('item_type_id', 2);
			}
		}

		$data = $query->paginate(15);

		//log search to db async
		dispatch(new SearchLogJob($term));

		return $data;
	}

	function getAllThematicAreas()
	{
		$areas = ThematicArea::orderBy('display_index', 'asc')->get();
		// Count the number of items in each area
		foreach ($areas as $area) {
			$area->count = count(get_area_items($area->id));
		}

		return $areas;
	}

	function getAccessLog()
	{

		$accessLogs = AccessLog::with('item')->orderBy('count', 'desc')->take(50)->get();
		$type = (isset($_GET['type'])) ? $_GET['type'] : 2;

		return $accessLogs->filter(function ($row) use ($type) {
          if($row->item)
			return ($row->item->item_type_id == $type);
		});
	}

	function getSearchSuggestions(Request $request)
	{

		$term = $request->term;

		return Item::where('title', 'like', '%' . $term . '%')
			->orWhere('description', 'like', '%' . $term . '%')
			->orWhere('access_method', 'like', '%' . $term . '%')
			->orWhere('url_link', 'like', '%' . $term . '%')
			->orWhere('department', 'like', '%' . $term . '%')
			->orWhere('hosting_organiation', 'like', '%' . $term . '%')
			->get()
			->pluck('title');
	}

	public function logAccess($id)
	{

		$log = AccessLog::firstOrNew(array('item_id' => $id));
		$log->count += 1;
		$log->save();
	}

	public function getItem($id)
	{
		return Item::find($id);
	}
	public function keywordLog()
	{
		return Log::paginate(10);
	}
}
