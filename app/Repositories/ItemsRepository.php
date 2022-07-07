<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;
use App\Models\Log;
use App\Jobs\SearchLogJob;
use App\Models\ItemType;
use App\Models\ItemContactPerson;
use App\Models\ApprovalAuthority;
use App\Models\ItemUiTool;
use App\Models\UiTool;
use App\Models\DevEntity;
use App\Models\ContactPerson;
use App\Models\ItemThematicArea;

class ItemsRepository
{


	function getAllItems(Request $request)
	{

		$area = $request->area;
		$term = $request->term;

		if ($term) {

			$query =  Item::where('title', 'like', '%' . $term . '%')
				->orWhere('description', 'like', '%' . $term . '%')
				->orWhere('access_method', 'like', '%' . $term . '%')
				->orWhere('url_link', 'like', '%' . $term . '%')
				->orWhere('department', 'like', '%' . $term . '%')
				->orWhere('hosting_organiation', 'like', '%' . $term . '%')
				->orWhere('title', 'like', '%' . rephrase($term, 5) . '%')
				->orWhere('description', 'like', '%' . rephrase($term) . '%')
				->orderBy('title', 'asc');

			return $query->paginate(15);
		} else {

			return Item::paginate(15);
		}
	}

	function getItem($id)
	{
		return Item::find($id);
	}


	function saveItem(Request $request, $contactsIsExternal = false, $id = null)
	{

		$item = ($id) ? Item::find($id) : new Item();

		$item->title    = $request->title;
		$item->url_link = $request->url;
		$item->hosting_organiation = $request->organization;
		$item->access_method 	   = $request->access_method;
		$item->thematic_area_id    = 0;
		$item->db_engine 		   = $request->db_engine;
		$item->item_type_id        = $request->item_type;
		$item->description         = $request->description;
		$item->status 			   = 1;
		$item->published 		   = ($contactsIsExternal) ? 0 : $request->published;
		$item->department		   = 1;

		if ($request->file('image')) {

			$file = $request->file('image');
			$filename = date('YmdHi') . $file->getClientOriginalName();
			$file->move(public_path('images'), $filename);
			$item->image = $filename;
		}


		if ($request->dev_entity)
			$item->dev_entity_id = $request->dev_entity;

		if ($request->approval_authority)
			$item->approval_authority_id = $request->approval_authority;

		if ($request->uitool)
			$item->ui_tool_id = $request->uitool;

		//save the item
		$saved = ($id) ? $item->update() : $item->save();


		//save thematic areas

		for ($i = 0; $i < count($request->thematic_areas); $i++) {

			$thematic_areas  = $request->thematic_areas;

			$area = ItemThematicArea::firstOrNew(array('thematic_area_id' => $thematic_areas[$i], 'item_id' => $item->id));
			$area->save();
		}

		//save contacts
		if ($request->contact && !$contactsIsExternal) {

			$contact = ItemContactPerson::firstOrNew(
				array('contact_person_id' => $request->contact, 'item_id' => $item->id)
			);
			$contact->save();
		}

		//contacts for submission
		if ($contactsIsExternal) {
			//loop through contacts array, create the contact record, associate with item

			for ($i = 0; $i < count($request->name); $i++) :

				$names  = $request->name;
				$emails = $request->email;
				$phones = $request->phone;
				$titles = $request->person_title;

				$person = ContactPerson::firstOrNew(array('phone_number' => $phones[$i]));

				$person->name = $names[$i];
				$person->phone_number = $phones[$i];
				$person->email = $emails[$i];
				$person->title = $titles[$i];
				$person->organization_id = $item->hosting_organiation;
				$person->save();

				$contact = ItemContactPerson::firstOrNew(array('contact_person_id' => $person->id, 'item_id' => $item->id));
				$contact->save();

			endfor;
		}

		return $saved;
	}

	function getAllThematicAreas($request = null)
	{


		if (@$request->term) {

			$term = $request->term;

			$query =  ThematicArea::where('description', 'like', '%' . $term . '%')
				->orderBy('display_index', 'asc');

			return $query->paginate(15);
		} else {

			return ThematicArea::orderBy('display_index', 'asc')->paginate(20);
		}
	}

	function getAllItemTypes()
	{
		return ItemType::paginate(1000);
	}

	function saveType(Request $request)
	{

		$type = new ItemType();
		$type->item_type_name = $request->type_name;
		$type->item_type_desc = $request->description;
		return $type->save();
	}

	function saveThematicArea(Request $request)
	{

		$area = ($request->id) ? ThematicArea::find($request->id) : new ThematicArea();
		$area->description = $request->description;
		$area->icon = $request->icon;
		$area->display_index = $request->index;
		return $area->save();
	}

	function deleteThematicArea($id)
	{
		return ThematicArea::findOrFail($id)->delete();
	}
	//front CMS submission
	function savePublicItem(Request $request, $id = null)
	{

		$item = ($id) ? Item::find($id) : new Item();

		$item->title    = $request->title;
		$item->url_link = $request->url;
		$item->hosting_organiation = $request->organization;
		$item->access_method 	   = $request->access_method;
		$item->thematic_area_id    = 0;
		//$item->thematic_area_id    = $request->thematic_area;
		$item->db_engine 		   = $request->db_engine;
		$item->item_type_id        = $request->item_type;
		$item->description         = $request->description;
		$item->status 			   = 1;
		$item->department		   = 1;

		if ($request->file('image')) {

			$file = $request->file('image');
			$filename = date('YmdHi') . $file->getClientOriginalName();
			$file->move(public_path('images'), $filename);
			$item->image = $filename;
		}



		if ($request->dev_entity)
			$item->dev_entity_id = $request->dev_entity;

		if ($request->approval_authority)
			$item->approval_authority_id = $request->approval_authority;

		if ($request->uitool)
			$item->ui_tool_id = $request->uitool;


		$saved = ($id) ? $item->update() : $item->save();

		//save thematic areas

		for ($i = 0; $i < count($request->thematic_areas); $i++) {

			$thematic_areas  = $request->thematic_areas;

			$area = ItemThematicArea::firstOrNew(array('thematic_area_id' => $thematic_areas[$i], 'item_id' => $item->id));
			$area->save();
		}



		if ($request->contact) {

			$contact = ItemContactPerson::firstOrNew(
				array('contact_person_id' => $request->contact, 'item_id' => $item->id)
			);
			$contact->save();
		}

		return $saved;
	}
}
