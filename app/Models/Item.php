<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ThematicArea;
use App\Models\ItemType;

class Item extends Model
{
    use HasFactory;


    public function thematic_area(){

    	return $this->belongsTo(ThematicArea::class);
    }

    public function item_type(){
    	return $this->belongsTo(ItemType::class);
    }
}
