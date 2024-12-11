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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('jalur');
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('email');
            $table->string('noHp');
            $table->string('namaIbu');
            $table->string('namaSekolah');
            $table->string('jurusanSekolah');
            $table->string('statusPendaftaran');
            $table->string('waktuKuliah');
            $table->string('nisn');
            $table->string('referensi');
            $table->string('informasi');
            $table->string('prodi1');
            $table->string('prodi2');
            $table->string('prodi3');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
