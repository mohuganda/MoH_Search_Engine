<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ContactPerson;

class ItemContactPerson extends Model
{
    use HasFactory;

    protected $table="item_contact_persons";
    protected $guarded = [];

    public function contact(){
    	return $this->belongsTo(ContactPerson::class,'contact_person_id','id');
    }
}
