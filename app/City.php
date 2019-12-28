<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public static function getCities()
    {
        return City::withCount('places')->get();
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
