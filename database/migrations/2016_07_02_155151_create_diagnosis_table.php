<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('check_id')->unsigned();
            $table->integer('disease_id')->unsigned();
            $table->float('cf_total');

            $table->foreign('check_id')->references('id')->on('checks')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('diagnosis_indication', function (Blueprint $table){
            $table->integer('diagnosis_id')->unsigned();
            $table->integer('indication_id')->unsigned();
            $table->timestamps();

            $table->foreign('diagnosis_id')->references('id')->on('diagnosis')->onDelete('cascade');
            $table->foreign('indication_id')->references('id')->on('indications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosis_indication');
        Schema::drop('diagnosis');
    }
}
