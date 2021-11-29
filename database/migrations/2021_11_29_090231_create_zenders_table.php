<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zenders', function (Blueprint $table) {
            $table->id();
            $table->string('programma');
            $table->date('datum');
            $table->integer('tijd');
            $table->integer('duurInMinuten');
            $table->string('presentator');
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
        Schema::dropIfExists('zenders');
    }
}
