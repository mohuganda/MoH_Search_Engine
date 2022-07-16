<?php

use App\Models\Item;
use App\Models\ItemType;

if (!function_exists('count_area_records')) {

	function count_area_records($area_id)
	{
		$query = Item::where('thematic_area_id', $area_id);

		$type = (isset($_GET['type'])) ? $_GET['type'] : 2;

		$query->where('item_type_id', $type);

		return $query->count();
	}
}

if (!function_exists('rephrase')) {

	function rephrase($original_text, $length = 6, $start_index = 0)
	{
		return substr($original_text, $start_index, $length);
	}
}

if (!function_exists('highlight')) {

	function highlight($text, $key)
	{
		return str_replace(ucwords($key), "<strong>" . ucwords($key) . "</strong>", str_replace($key, "<strong>$key</strong>", $text));
	}
}

if (!function_exists('truncate')) {

	function truncate($text, $length = 10)
	{
		return ($length < strlen($text)) ? substr($text, 0, $length) . "..." : $text;
	}
}

if (!function_exists('get_item_type')) {

	function get_item_type()
	{
		$type_id = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 2;
		return ItemType::find($type_id)->item_type_name . 's';
	}
}
