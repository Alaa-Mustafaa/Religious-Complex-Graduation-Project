<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriipsTable extends Migration
{
    public function up()
    {
        Schema::create('triips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('date');
            $table->string('phone');
            $table->integer('number_of_adults');
            $table->integer('number_of_kids');
            $table->string('program');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('triips');
    }
}

