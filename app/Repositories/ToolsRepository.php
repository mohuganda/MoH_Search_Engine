<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\UiTool;

class ToolsRepository
{


	function getAll(Request $request= null){
		$per_page = ($request && $request->per_page)?$request->per_page:1000;
		return UiTool::paginate($per_page);
	}

	function save(Request $request){
		
		$auth = ($request->id)?UiTool::find($request->id):new UiTool();
		
		$auth->tool_name = $request->name;
		$auth->tool_description = $request->description;
		return $auth->save();
	}

	function delete($id){
		return UiTool::findOrFail($id)->delete();
	}

}


?>