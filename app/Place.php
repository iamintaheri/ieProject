<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public static function getPlaces($city_id)
    {
        $places = Place::where('city_id',$city_id)->paginate(5);
        return $places;
    }
}
