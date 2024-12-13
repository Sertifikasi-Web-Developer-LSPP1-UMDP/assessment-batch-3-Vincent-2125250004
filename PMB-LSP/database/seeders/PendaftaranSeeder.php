<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PendaftaranSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $user = User::all();

        foreach ($user as $item) {
            foreach (range(1, 10) as $index) {
                Pendaftaran::create([
                    'user_id' => $item->id,
                    'jalur' => $faker->word,
                    'nama' => $item->name,
                    'jenisKelamin' => $faker->randomElement(['Laki-laki', 'Wanita']),
                    'tempatLahir' => $faker->city,
                    'tanggalLahir' => $faker->date(),
                    'agama' => $faker->word,
                    'kewarganegaraan' => $faker->country,
                    'alamat' => $faker->address,
                    'kota' => $faker->city,
                    'provinsi' => $faker->state,
                    'email' => $item->email,
                    'noHp' => $faker->phoneNumber,
                    'namaIbu' => $faker->name,
                    'namaSekolah' => $faker->company,
                    'jurusanSekolah' => $faker->word,
                    'statusPendaftaran' => $faker->randomElement(['Mahasiswa Baru', 'Mahasiswa Pindahan']),
                    'waktuKuliah' => $faker->word,
                    'nisn' => $faker->randomNumber(8),
                    'referensi' => $faker->word,
                    'informasi' => $faker->sentence,
                    'prodi1' => $faker->word,
                    'prodi2' => $faker->word,
                    'prodi3' => $faker->word,
                    'status' => $item->is_verified ? $faker->randomElement(['Lulus', 'Seleksi Berkas', 'Tidak Lulus']) : 'Belum Terdaftar',
                ]);
            }
        }
    }
}
