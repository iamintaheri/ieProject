<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/city.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</header>
<div class="container red topBotomBordersOut">
    <a href="{{route('home')}}">HOME</a>
    <a href="{{route('cities')}}">Cities</a>
</div>

<ul class="list-group">
    @foreach($cities as $c)
    <a href="{{route('places',$c->id)}}"><li class="list-group-item d-flex justify-content-between align-items-center">
            {{$c->name}}
            <span class="badge badge-primary badge-pill">{{$c->places_count}}</span>
    </li>
    </a>
    @endforeach

</ul>