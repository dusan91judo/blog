<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNapomenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('napomene', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('tekst');

            $table->integer('skola_id')->unsigned()->nullable();
            $table->foreign('skola_id')->references('id')->on('skole')->onDelete('cascade');

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
        Schema::dropIfExists('napomene');
    }
}
