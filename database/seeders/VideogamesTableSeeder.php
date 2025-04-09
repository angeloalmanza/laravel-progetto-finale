<?php

namespace Database\Seeders;

use App\Models\Videogame;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class VideogamesTableSeeder extends Seeder
{
    public function run(): void
    {
        $videogames = [
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'An open-world action-adventure game developed and published by Nintendo.',
                'release_year' => 2017,
            ],
            [
                'name' => 'God of War',
                'description' => 'An action-adventure game that follows Kratos and his son Atreus on a journey through Norse mythology.',
                'release_year' => 2018,
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'description' => 'A western-themed action-adventure game set in an open world, developed by Rockstar Games.',
                'release_year' => 2018,
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'description' => 'A story-driven open-world RPG set in a dark fantasy universe.',
                'release_year' => 2015,
            ],
            [
                'name' => 'Grand Theft Auto V',
                'description' => 'An action-adventure game with a vast open world, developed by Rockstar North.',
                'release_year' => 2013,
            ],
            [
                'name' => 'Minecraft',
                'description' => 'A sandbox video game where players can build and explore infinite worlds made of blocks.',
                'release_year' => 2011,
            ],
            [
                'name' => 'Elden Ring',
                'description' => 'An action RPG developed by FromSoftware, with world-building by George R. R. Martin.',
                'release_year' => 2022,
            ],
            [
                'name' => 'Cyberpunk 2077',
                'description' => 'A futuristic open-world RPG set in the dystopian Night City.',
                'release_year' => 2020,
            ],
            [
                'name' => 'Horizon Zero Dawn',
                'description' => 'An action RPG where players hunt robotic creatures in a post-apocalyptic world.',
                'release_year' => 2017,
            ],
            [
                'name' => 'Super Mario Odyssey',
                'description' => 'A 3D platform game where Mario travels across various kingdoms to rescue Princess Peach.',
                'release_year' => 2017,
            ],
        ];

        $allGenres = Genre::all();

        foreach ($videogames as $vg) {
            $videogame = new Videogame();
            $videogame->name = $vg['name'];
            $videogame->description = $vg['description'];
            $videogame->release_year = $vg['release_year'];
            $videogame->platform_id = rand(1, 4);
            $videogame->save();

            // Associa 1 o 2 generi casuali
            $randomGenres = $allGenres->random(rand(1, 2))->pluck('id');
            $videogame->genres()->attach($randomGenres);
        }
    }
}

