<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $platforms = ['PS5', 'XBox', 'Switch', 'PC'];

        foreach($platforms as $platform){
            $newPlatform = new Platform();

            $newPlatform->name = $platform;
            $newPlatform->description = $faker->paragraphs(3, true);

            $newPlatform->save();
        }
    }
}
