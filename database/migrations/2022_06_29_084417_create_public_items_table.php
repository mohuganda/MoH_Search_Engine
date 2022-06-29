<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void*/
     public function up()
    {
        Schema::create('public_items', function (Blueprint $table) {
            $table->id();
            $table->string('url_link',200);
            $table->string('image',100);
            $table->string('title',200);
            $table->string('description',500);
            $table->string('hosting_organiation');
            $table->string('access_method');
            $table->string('thematic_area_id');
            $table->string('item_type_id');
            $table->string('status');
            $table->string('department');
            $table->text('contact_persons');
            $table->string('db_engine')->nullable();
            $table->string('app_server')->nullable();
            $table->string('approval_status')->nullable();
            $table->foreignId('approval_authority_id')->nullable();
            $table->foreignId('dev_entity_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }

}
