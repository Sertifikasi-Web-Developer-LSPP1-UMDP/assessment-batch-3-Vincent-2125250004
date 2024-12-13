<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PengumumanSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Pengumuman::create([
                'headline' => $faker->sentence,
                'subHeadline' => $faker->sentence,
                'content' => $faker->paragraph,
                'image' => $faker->imageUrl(),
                'linkContent' => $faker->url,
            ]);
        }
    }
}
