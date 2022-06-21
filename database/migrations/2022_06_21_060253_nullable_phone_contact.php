<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullablePhoneContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_persons', function (Blueprint $table) {
          
            $table->string('phone_number')->nullable()->change();
           
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
          
            $table->string('phone_number',50)->nullable();
           
        });
    }
}
