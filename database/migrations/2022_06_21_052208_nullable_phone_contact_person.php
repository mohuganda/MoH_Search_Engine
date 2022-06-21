<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullablePhoneContactPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
          
            $table->string('phone_number',50)->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_persons', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phone_number',50);
            $table->string('email')->nullable();
            $table->string('title',50);
            $table->foreignId('organization_id');
            $table->timestamps();
        });
    }
}
