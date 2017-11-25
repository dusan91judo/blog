<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime');
            $table->string('prezime');
            $table->integer('godiste');

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
        Schema::table('profesori', function (Blueprint $table) {
            $table->dropForeign('profesori_skola_id_foreign');
        });

        Schema::dropIfExists('profesori');
    }
}
