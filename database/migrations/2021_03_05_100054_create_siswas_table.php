<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama');
            $table->enum('jk',['l','p']);
            $table->string('nik')->nullable();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nama_ibu');
            $table->string('agama');
            $table->string('kewarganegaraan')->default('Indonesia');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('hp');
            $table->string('email')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
