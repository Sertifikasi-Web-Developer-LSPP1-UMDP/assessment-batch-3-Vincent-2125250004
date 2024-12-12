<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        
        $user->assignRole('admin');

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_verified' => false,
        ]);

        // Add more dummy users as needed:
        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_verified' => false,
        ]);
        
        User::create([
            'name' => 'Vincent',
            'email' => 'vincent@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_verified' => false,
        ]);

        $jalurOptions = ['Reguler', 'Beasiswa', 'Transfer'];
        $jenisKelaminOptions = ['Laki-laki', 'Perempuan'];
        $users_id = [2,3,4];
        $agamaOptions = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
        $prodiOptions = ['Teknik Informatika', 'Sistem Informasi', 'Manajemen', 'Akuntansi'];
        $statusPendaftaranOptions = ['Belum Diverifikasi', 'Diverifikasi', 'Ditolak'];
        $waktuKuliahOptions = ['Pagi', 'Sore', 'Malam'];

        for ($i = 0; $i < 50; $i++) {
            DB::table('pendaftaran')->insert([
                'jalur' => $jalurOptions[array_rand($jalurOptions)],
                'nama' => 'Nama Siswa ' . ($i + 1),
                'user_id' => $users_id[array_rand($users_id)],
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
