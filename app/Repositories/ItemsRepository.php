<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;
use App\Models\Log;
use App\Jobs\SearchLogJob;

class ItemsRepository
{


	function getAllItems(Request $request){

		return Item::paginate(15);
	}

	function getAllThematicAreas(){
		return ThematicArea::all();
	}


}


?>