<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    public function platform() {
        return $this->belongsTo(Platform::class);
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}
