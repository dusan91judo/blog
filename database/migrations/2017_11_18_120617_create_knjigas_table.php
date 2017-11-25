<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnjigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjige', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('autor');
            $table->integer('broj_strana');

            $table->integer('knjiga_id')->unsigned();
            $table->foreign('knjiga_id')->references('id')->on('biblioteka');

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
        Schema::dropIfExists('knjige');
    }
}
