<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videogames')->insert([
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'An open-world action-adventure game developed and published by Nintendo.',
                'release_year' => 2017,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'God of War',
                'description' => 'An action-adventure game that follows Kratos and his son Atreus on a journey through Norse mythology.',
                'release_year' => 2018,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'description' => 'A western-themed action-adventure game set in an open world, developed by Rockstar Games.',
                'release_year' => 2018,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'description' => 'A story-driven open-world RPG set in a dark fantasy universe.',
                'release_year' => 2015,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grand Theft Auto V',
                'description' => 'An action-adventure game with a vast open world, developed by Rockstar North.',
                'release_year' => 2013,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minecraft',
                'description' => 'A sandbox video game where players can build and explore infinite worlds made of blocks.',
                'release_year' => 2011,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Elden Ring',
                'description' => 'An action RPG developed by FromSoftware, with world-building by George R. R. Martin.',
                'release_year' => 2022,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cyberpunk 2077',
                'description' => 'A futuristic open-world RPG set in the dystopian Night City.',
                'release_year' => 2020,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Horizon Zero Dawn',
                'description' => 'An action RPG where players hunt robotic creatures in a post-apocalyptic world.',
                'release_year' => 2017,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Mario Odyssey',
                'description' => 'A 3D platform game where Mario travels across various kingdoms to rescue Princess Peach.',
                'release_year' => 2017,
                'platform_id' => rand(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
