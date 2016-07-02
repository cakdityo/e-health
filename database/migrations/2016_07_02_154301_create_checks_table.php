<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('check_indication', function (Blueprint $table){
            $table->integer('check_id')->unsigned();
            $table->integer('indication_id')->unsigned();
            $table->timestamps();

            $table->foreign('check_id')->references('id')->on('checks')->onDelete('cascade');
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
        Schema::dropIfExists('check_indication');
        Schema::drop('checks');
    }
}
