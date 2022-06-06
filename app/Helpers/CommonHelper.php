<?php

use App\Models\Users;
use Illuminate\Support\Facades\DB;


 if(!function_exists('user_role')){

 	function user_role($userId){

        $response = DB::table("model_has_roles")
                        ->where('model_id',$userId)
                        ->join('roles','role_id','roles.id')
                        ->first();
        return $response;
 	}

 }
