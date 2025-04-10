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
                'image' => 'videogames/The_Legend_of_Zelda.jpeg'
            ],
            [
                'name' => 'God of War',
                'description' => 'An action-adventure game that follows Kratos and his son Atreus on a journey through Norse mythology.',
                'release_year' => 2018,
                'image' => 'videogames/God_of_war.jpeg'
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'description' => 'A western-themed action-adventure game set in an open world, developed by Rockstar Games.',
                'release_year' => 2018,
                'image' => 'videogames/red_dead_redemption_2.jpeg'
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'description' => 'A story-driven open-world RPG set in a dark fantasy universe.',
                'release_year' => 2015,
                'image' => 'videogames/the_witcher_3.jpeg'
            ],
            [
                'name' => 'Grand Theft Auto V',
                'description' => 'An action-adventure game with a vast open world, developed by Rockstar North.',
                'release_year' => 2013,
                'image' => 'videogames/GTAV.jpeg'
            ],
            [
                'name' => 'Minecraft',
                'description' => 'A sandbox video game where players can build and explore infinite worlds made of blocks.',
                'release_year' => 2011,
                'image' => 'videogames/minecraft.jpeg'
            ],
            [
                'name' => 'Elden Ring',
                'description' => 'An action RPG developed by FromSoftware, with world-building by George R. R. Martin.',
                'release_year' => 2022,
                'image' => 'videogames/elden_ring.jpeg'
            ],
            [
                'name' => 'Cyberpunk 2077',
                'description' => 'A futuristic open-world RPG set in the dystopian Night City.',
                'release_year' => 2020,
                'image' => 'videogames/cyberpunk_2077.jpeg'
            ],
            [
                'name' => 'Horizon Zero Dawn',
                'description' => 'An action RPG where players hunt robotic creatures in a post-apocalyptic world.',
                'release_year' => 2017,
                'image' => 'videogames/Horizon_zero_dawn.jpeg'
            ],
            [
                'name' => 'Super Mario Odyssey',
                'description' => 'A 3D platform game where Mario travels across various kingdoms to rescue Princess Peach.',
                'release_year' => 2017,
                'image' => 'videogames/Super_Mario_Odyssey.jpeg'
            ],
        ];

        $allGenres = Genre::all();

        foreach ($videogames as $vg) {
            $videogame = new Videogame();
            $videogame->name = $vg['name'];
            $videogame->description = $vg['description'];
            $videogame->release_year = $vg['release_year'];
            $videogame->image = $vg['image'];
            $videogame->platform_id = rand(1, 4);
            $videogame->save();

            // Associa 1 o 2 generi casuali
            $randomGenres = $allGenres->random(rand(1, 2))->pluck('id');
            $videogame->genres()->attach($randomGenres);
        }
    }
}

