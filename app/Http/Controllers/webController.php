<?php

namespace App\Http\Controllers;

use App\City;
use App\Place;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function renderCities()
    {
        $cities = City::getCities();

        return view('city',compact('cities'));
    }

    public function renderPlaces($city_id)
    {
        $places = Place::getPlaces($city_id);
        return view('place',compact('places'));
    }



}
