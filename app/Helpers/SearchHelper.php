<?php

use App\Models\Item;


 if(!function_exists('count_area_records')){

 	function count_area_records($area_id){
 			return Item::where('thematic_area_id',$area_id)->count();
 	}

 }

 if(!function_exists('rephrase')){

	function rephrase($original_text,$length=6,$start_index=0){
			return substr($original_text,$start_index,$length);
	}

}

if(!function_exists('highlight')){

	function highlight($text,$key){
			return str_replace(ucwords($key),"<strong>".ucwords($key)."</strong>",str_replace($key,"<strong>$key</strong>",$text));
	}

}
 