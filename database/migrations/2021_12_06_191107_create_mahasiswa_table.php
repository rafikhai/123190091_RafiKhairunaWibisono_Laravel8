<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //menambah field dalam sebuah table
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('nim');
            $table->longText('alamat');
            $table->softDeletes(); //ketika data dihapus maka di db masih ada datanya 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //menghapus atau mengurangi
    {
        Schema::dropIfExists('mahasiswa');
    }
}
