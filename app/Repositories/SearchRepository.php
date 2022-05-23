<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;

class SearchRepository
{


	function getAllItems(){
		return  Item::paginate(15);
	}

	function getAllThematicAreas(){
		return ThematicArea::all();
	}


}


?>