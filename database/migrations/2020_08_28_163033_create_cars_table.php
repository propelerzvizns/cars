<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Polja u tabeli: id, title, producer, number_of_doors
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('producer');
            $table->integer('number_of_doors');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
