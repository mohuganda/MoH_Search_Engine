<?php

use App\Models\Item;


 if(!function_exists('count_area_records')){

 	function count_area_records($area_id){
 			return Item::where('thematic_area_id',$area_id)->count();
 	}

 }