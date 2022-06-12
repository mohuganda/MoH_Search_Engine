<?php

use App\Models\Users;
use Illuminate\Support\Facades\DB;
use App\Models\ThematicArea;


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
 

