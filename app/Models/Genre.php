<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function videogames() {
        return $this->belongsToMany(Videogame::class);
    }
}
