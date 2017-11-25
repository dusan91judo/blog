<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSkolaForeignKeyUceniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ucenici', function (Blueprint $table) {
            $table->integer('skola_id')->unsigned()->nullable();
            $table->foreign('skola_id')->references('id')->on('skole')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ucenici', function (Blueprint $table) {
            $table->dropForeign('ucenici_skola_id_foreign');
            $table->dropColumn('skola_id');
        });
    }
}
