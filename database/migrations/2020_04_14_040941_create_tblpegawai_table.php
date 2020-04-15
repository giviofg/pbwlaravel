<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat table dalam database
        Schema::create('tblpegawai', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nama');
            $table->string('jabatan');
            $table->integer('umur');
            $table->string('alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tblpegawai');
    }
}
