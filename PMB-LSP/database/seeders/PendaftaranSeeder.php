<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jalurOptions = ['Reguler', 'Beasiswa', 'Transfer'];
        $jenisKelaminOptions = ['Laki-laki', 'Perempuan'];
        $agamaOptions = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
        $prodiOptions = ['Teknik Informatika', 'Sistem Informasi', 'Manajemen', 'Akuntansi'];
        $statusPendaftaranOptions = ['Belum Diverifikasi', 'Diverifikasi', 'Ditolak'];
        $waktuKuliahOptions = ['Pagi', 'Sore', 'Malam'];

        for ($i = 0; $i < 50; $i++) {
            DB::table('pendaftaran')->insert([
                'jalur' => $jalurOptions[array_rand($jalurOptions)],
                'nama' => 'Nama Siswa ' . ($i + 1),
                'jenisKelamin' => $jenisKelaminOptions[array_rand($jenisKelaminOptions)],
                'tempatLahir' => 'Kota ' . Str::random(5),
                'tanggalLahir' => now()->subYears(rand(17, 25))->format('Y-m-d'),
                'agama' => $agamaOptions[array_rand($agamaOptions)],
                'kewarganegaraan' => 'Indonesia',
                'alamat' => 'Alamat Siswa ' . ($i + 1),
                'kota' => 'Kota ' . Str::random(5),
                'provinsi' => 'Provinsi ' . Str::random(5),
                'email' => 'email' . $i . '@example.com',
                'noHp' => '08' . rand(1000000000, 9999999999),
                'namaIbu' => 'Ibu Siswa ' . ($i + 1),
                'namaSekolah' => 'Sekolah ' . ($i + 1),
                'jurusanSekolah' => 'IPA',
                'statusPendaftaran' => $statusPendaftaranOptions[array_rand($statusPendaftaranOptions)],
                'waktuKuliah' => $waktuKuliahOptions[array_rand($waktuKuliahOptions)],
                'nisn' => '123456' . $i,
                'referensi' => 'Referensi ' . ($i + 1),
                'informasi' => 'Informasi ' . ($i + 1),
                'prodi1' => $prodiOptions[array_rand($prodiOptions)],
                'prodi2' => $prodiOptions[array_rand($prodiOptions)],
                'prodi3' => $prodiOptions[array_rand($prodiOptions)],
                'status' => 'Lulus',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
