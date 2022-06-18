<?php

use App\Models\Users;
use Illuminate\Support\Facades\DB;
use App\Models\ThematicArea;
use App\Models\ItemContactPerson;


 if(!function_exists('user_role')){

 	function user_role($userId){

        $response = DB::table("model_has_roles")
                        ->where('model_id',$userId)
                        ->join('roles','role_id','roles.id')
                        ->first();
        return $response;
 	}

 }


 if(!function_exists('has_permission')){

 	function has_permission($permission=null){

        return Auth::user()->can("create users");
 	}

 }

 if(!function_exists('get_areas')){

 	function get_areas(){
        return ThematicArea::all();
 	}
 }

 if(!function_exists('get_user')){

 	function get_user(){
        return Auth::user();
 	}
 }

 if( !function_exists('item_contacts')){

 	function item_contacts($item_id=null,$return_ids=true){

 		$contacts = ItemContactPerson::where('item_id',$item_id)->get();
 		
 		if($return_ids):

	 		$contact_arr = [];

	 		foreach ($contacts as $contact) {
	 			array_push($contact_arr, $contact->id);
	 		}

	 		return $contact_arr;
 		endif;

 		return $contacts;

    }
 }
 

