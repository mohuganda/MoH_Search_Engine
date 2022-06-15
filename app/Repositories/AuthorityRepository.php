<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ApprovalAuthority;

class AuthorityRepository
{


	function getAll(Request $request= null){
		$per_page = ($request && $request->per_page)?$request->per_page:1000;
		return ApprovalAuthority::paginate($per_page);
	}

	function save(Request $request){
		
		$auth = ($request->id)?ApprovalAuthority::find($request->id):new ApprovalAuthority();
		
		$auth->authority_name = $request->name;
		$auth->authority_description = $request->description;
		return $auth->save();
	}

	function delete($id){
		return ApprovalAuthority::findOrFail($id)->delete();
	}

}


?>