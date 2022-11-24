<?php

use App\Models\Users;
use Illuminate\Support\Facades\DB;
use App\Models\ThematicArea;
use App\Models\ItemContactPerson;
use App\Models\ItemThematicArea;

if (!function_exists('user_role')) {

	function user_role($userId)
	{

		$response = DB::table("model_has_roles")
			->where('model_id', $userId)
			->join('roles', 'role_id', 'roles.id')
			->first();
		return $response;
	}
}


if (!function_exists('has_permission')) {

	function has_permission($permission = null)
	{

		return Auth::user()->can("create users");
	}
}

if (!function_exists('get_areas')) {

	function get_areas($area_id = null)
	{
		return ($area_id) ? ThematicArea::find($area_id) : ThematicArea::all();
	}
}



if (!function_exists('get_user')) {

	function get_user()
	{
		return Auth::user();
	}
}


if (!function_exists('is_valid_image')) {

	function is_valid_image($name, $path = FALSE)
	{
		$path = '/images/';
		$image = $path . $name;
		if (file_exists(public_path() . $image)) {
			return TRUE;
		} else {
			return FALSE;

		}
	}
}


if (!function_exists('item_contacts')) {

	function item_contacts($item_id = null, $return_ids = true)
	{

		$contacts = ItemContactPerson::where('item_id', $item_id)->get();

		if ($return_ids):

			$contact_arr = [];

			foreach ($contacts as $contact) {
				array_push($contact_arr, $contact->contact_person_id);
			}
			return $contact_arr;
		endif;

		return $contacts;
	}
}


if (!function_exists('get_area_items')) {

	function get_area_items($area_id = null, $return_ids = true)
	{

		$items = ItemThematicArea::where('thematic_area_id', $area_id)->get();

		if ($return_ids):

			$item_arr = [];

			foreach ($items as $item) {
				array_push($item_arr, $item->item_id);
			}
			return $item_arr;
		endif;

		return $items;
	}
}