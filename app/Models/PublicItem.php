<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ThematicArea;
use App\Models\ItemType;
use App\Models\Organization;
use App\Models\UiTool;
use App\Models\DevEntity;
use App\Models\ApprovalAuthority;
use App\Models\AccessLog;
use Carbon\Carbon;

class Item extends Model
{
    use HasFactory;


    public function thematic_area(){
    	return $this->belongsTo(ThematicArea::class);
    }

    public function item_type(){
    	return $this->belongsTo(ItemType::class);
    }

    public function organization(){
    	return $this->belongsTo(Organization::class,'hosting_organiation','id');
    }

    public function uitool(){
        return $this->belongsTo(UiTool::class,'ui_tool_id','id');
    }

    public function devEntity(){
        return $this->belongsTo(DevEntity::class,'dev_entity_id','id');
    }

     public function authority(){
        return $this->belongsTo(ApprovalAuthority::class,'approval_authority_id','id');
    }

    public function accessLog(){
        return $this->belongsTo(AccessLog::class,'id','item_id');
    }


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y');
    }

}
