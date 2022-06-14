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


	function getAllItems(Request $request){

		$term = $request->term;
		$area = $request->area;

		if($term){

		 $query =  Item::where('title', 'like', '%' . $term . '%')
					->orWhere('description', 'like', '%' . $term . '%')
					->orWhere('access_method', 'like', '%' . $term . '%')
					->orWhere('url_link', 'like', '%' . $term . '%')
					->orWhere('department', 'like', '%' . $term . '%')
					->orWhere('hosting_organiation', 'like', '%' . $term . '%')
					->orWhere('title', 'like', '%' . rephrase($term,5) . '%')
					->orWhere('description', 'like', '%' . rephrase($term) . '%')
					->orderBy('title','asc');

		  if(intval($area) >0)
			$query = $query->where('thematic_area_id',$area);

		} else{

		 $query = Item::where('thematic_area_id',$area);

		}

		$data = $query->paginate(20);

		 //log search to db async
         dispatch(new SearchLogJob($term));

         return $data;
	}

	function getAllThematicAreas(){
		return ThematicArea::orderBy('display_index','asc')->get();
	}

	function getAccessLog(){
		return 	AccessLog::orderBy('count','desc')->take(15)->get();
	}
   
   function getSearchSuggestions(Request $request){

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

   public function logAccess($id){

   	$log = AccessLog::firstOrNew(array('item_id' => $id ));
    $log->count += 1;
   	$log->save();

   }

   public function getItem($id){
   		return Item::find($id);
   }


}


?>