<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePpdb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email'); 
            $table->string('tempatLahir');
            $table->date('tanggalLahir'); 
            $table->string('alamat');
            $table->string('asal');
            $table->integer('nisn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdb');
    }
}
