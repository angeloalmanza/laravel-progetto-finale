<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public function videogames() {
        return $this->hasMany(Videogame::class);
    }
}
