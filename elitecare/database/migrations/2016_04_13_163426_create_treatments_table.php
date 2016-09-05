<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
     public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned() ;
            $table->string('headline') ;
            $table->text('tooth_number')->nullable() ;
            $table->text('complaint') ;
            $table->text('examination')->nullable();
            $table->text('treatment')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients') ->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::drop('treatments');
    }
}
