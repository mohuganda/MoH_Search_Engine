<?php

use App\Models\ItemContactPerson;




 if(!function_exists('get_organizations')){

 	function get_organizations(){


 			//return $organizationsRepo->getAll();
 	}

 }

 if(!function_exists('get_item_contact')){

 	function get_item_contact($item_id){
		$contact = ItemContactPerson::where('item_id',$item_id)->first();
		$person=  ($contact)?$contact->contact:null;
		return $person;
 	}

 }
