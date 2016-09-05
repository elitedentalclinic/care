<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
     public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_no');
            $table->string('name') ;
            $table->date('birth_date') ;
            $table->enum('sex', ['male', 'female']) ;
            $table->string('phone_number') ;
            $table->string('email')->nullable() ;
            $table->string('address')->nullable() ;
            $table->timestamps();
        });
    }

     public function down()
    {
        Schema::drop('patients');
    }
}
