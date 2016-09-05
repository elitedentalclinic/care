<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
     public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('treatment_id')->unsigned() ;
            $table->dateTime('appointment_time') ;
            $table->string('title')->nullable() ;
            $table->text('summary')->nullable() ;
           $table->timestamps();
           $table->foreign('treatment_id')->references('id')->on('treatments') ->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::drop('appointments');
    }
}
