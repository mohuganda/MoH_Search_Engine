<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ThematicArea;
use App\Models\Item;
use App\Models\Log;
use App\Jobs\SearchLogJob;
use App\Models\ItemType;
use App\Models\ItemContactPerson;

class ItemsRepository
{


	function getAllItems(Request $request){

		return Item::paginate(15);
	}

	function getItem($id){
		return Item::find($id);
	}

	function saveItem(Request $request,$id=null){

		$item = ($id)? Item::find($id): new Item();
		
		$item->title    = $request->title;
		$item->url_link = $request->url;
		$item->hosting_organiation = $request->organization;
		$item->access_method 	   = $request->access_method;
		$item->thematic_area_id    = $request->thematic_area;
		$item->db_engine 		   = $request->db_engine;
		$item->item_type_id        = $request->item_type;
		$item->description         = $request->description;
		$item->status 			   = 1;
		$item->department		   = 1;

		if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $item->image=$filename;
        }

		($id)?$item->update():$item->save();

		if($request->contact){

        	$contact = ItemContactPerson::firstOrNew(
        	array('contact_person_id' => $request->contact,'item_id'=>$item->id ));
        	$contact->save();
        }

	}

	function getAllThematicAreas(){
		return ThematicArea::orderBy('display_index','asc')->paginate(50);
	}

	function getAllItemTypes(){
		return ItemType::paginate(1000);
	}

	function saveType(Request $request){

		$type = new ItemType();
		$type->item_type_name = $request->type_name;
		$type->item_type_desc = $request->description;
		$type->save();
	}

	function saveThematicArea(Request $request){

		$area = ($request->id)? ThematicArea::find($request->id): new ThematicArea();
		$area->description = $request->description;
		$area->icon = $request->icon;
		$area->display_index = $request->index;
		$area->save();
	}

	function deleteThematicArea($id){
		return ThematicArea::findOrFail($id)->delete();
	}


}


?>