<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\DevEntity;

class DevEntitiesRepository
{


	function getAll(Request $request= null){
		$per_page = ($request && $request->per_page)?$request->per_page:1000;
		return DevEntity::paginate($per_page);
	}

	function save(Request $request){
		
		$entity = ($request->id)?DevEntity::find($request->id):new DevEntity();
		
		$entity->entity_name = $request->name;
		$entity->entity_description = $request->description;
		return $entity->save();
	}

	function delete($id){
		return DevEntity::findOrFail($id)->delete();
	}

}


?>