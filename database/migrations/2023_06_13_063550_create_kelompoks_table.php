<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ck')->unsigned();
            $table->string('nama_kel');
            $table->string('alamat_kel');
            $table->string('desa');
            $table->string('nama_ket');
            $table->string('alamat_ket');
            $table->string('nama_sek');
            $table->string('alamat_sek');
            $table->string('nama_ben');
            $table->string('alamat_ben');
            $table->integer('jml_angsuran');
            $table->integer('jml_pinjaman');
            $table->integer('jangka');
            $table->integer('suku');
            $table->integer('jasa');
            $table->integer('total');
            $table->enum('keterangan', ['Lunas','Belum']);
            $table->enum('Kategori', ['Perguliran','Pribadi']);
            $table->integer('no_rek');
            $table->integer('no_telp');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompoks');
    }
};
