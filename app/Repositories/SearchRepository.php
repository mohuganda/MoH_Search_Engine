<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;
use App\Models\Log;
use App\Jobs\SearchLogJob;

class SearchRepository
{


	function getAllItems(Request $request){

		$term = $request->term;
		$area = $request->area;

		$query =  Item::where('title', 'like', '%' . $term . '%')
					->orWhere('description', 'like', '%' . $term . '%')
					->orWhere('access_method', 'like', '%' . $term . '%')
					->orWhere('url_link', 'like', '%' . $term . '%')
					->orWhere('department', 'like', '%' . $term . '%')
					->orWhere('hosting_organiation', 'like', '%' . $term . '%');

		if(intval($area) >0)
			$query = $query->where('thematic_area_id',$area);

		$data = $query->paginate(15);

		 //log search to db async
         dispatch(new SearchLogJob($term));

         return $data;
	}

	function getAllThematicAreas(){
		return ThematicArea::all();
	}

	function getSearchLog(){
		return 	Log::take(10)->get();
	}
   
   function getSearchSuggestions(Request $request){

   	 return Log::where('search_phrase', 'like',  $request->term . '%')
   	 		->take(15)
   	 		->get()
   	 		->pluck('search_phrase');
   }


}


?>