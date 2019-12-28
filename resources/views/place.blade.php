
<!DOCTYPE html>
<html>
<header>
    <h1>
        Home page
    </h1>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/place.css')}}" type="text/css">
    <script type="text/javascript" src="{{asset('js/place.js')}}"></script>

</header>
<div class="container red topBotomBordersOut">
    <a href="{{route('home')}}">HOME</a>
    <a href="{{route('cities')}}">Cities</a>
</div>




@foreach($places as $p)

    <div class="card">
        <img class="card__image" src="{{asset('images')."/".$p->pic_path}}" alt="desert" />
        <div class="card-title">
            <a href="#" class="toggle-info btn">
                <span class="left"></span>
                <span class="right"></span>
            </a>
            <h2>
                {{$p->name}}

            </h2>
        </div>
        <div class="card-flap flap1">
            <div class="card-description">
                {{$p->description}}
            </div>
            <div class="card-flap flap2">
                <div class="card-actions">
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>


@endforeach








