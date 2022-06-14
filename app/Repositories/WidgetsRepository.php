<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\ContactPerson;
use App\Models\User;
use App\Models\Item;
use App\Models\ThematicArea;
use Illuminate\Support\Facades\DB;

class WidgetsRepository
{


	// function getAll(Request $request= null){
	// 	$per_page = ($request && $request->per_page)?$request->per_page:1000;
	// 	return ContactPerson::paginate($per_page);
	// }
   function getWidgets(){
    $data = DB::select(DB::raw("SELECT (select count(id) as users from  users ) as users, (select count(id) as thematic_areas from thematic_areas) as thematic_areas,(select count(id) as dashboards from items where item_type_id='2') as dashboards"));
      dd($data);
   }
   
	

}


?>