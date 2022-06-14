<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\ContactPerson;

class PersonsRepository
{


	function getAll(Request $request= null){
		$per_page = ($request && $request->per_page)?$request->per_page:1000;
		return ContactPerson::paginate($per_page);
	}

	function savePerson(Request $request){
		
		$person = ($request->id)?ContactPerson::find($request->id):new ContactPerson();
		
		$person->name = $request->name;
		$person->phone_number = $request->phone;
		$person->email = $request->email;
		$person->title = $request->title;
		$person->organization_id = $request->organization;
		return $person->save();
	}

	function deletePerson($id){
		return ContactPerson::findOrFail($id)->delete();
	}

}


?>