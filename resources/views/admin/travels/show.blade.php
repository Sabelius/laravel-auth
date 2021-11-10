@extends('layouts.app')


@section("content")
<div class="container">
    <div class="row">
        <h1 class="pt-2 pl-4 text-uppercase">Travel:</h1>
    </div>
    <div class="row">
        <div class="travel-list pt-3">
            <ul>
                 <li>
                    <h3>{{$travel->journey_name}}</h3>
                    <p>{{$travel->description}}</p>
                    <h5>Data partenza: <span>{{$travel->departure_date}}</span></h5>
                    <h5>Data ritorno:  <span>{{$travel->return_date}}</span></h5>
                    <h5>Posti disponibili:  <span>{{$travel->available_places}}</span></h5>
                    <h5>Posti rimanenti:  <span>{{$travel->is_available}}</span></h5>
                    <h5>Prezzo viaggio:  <span>{{$travel->price}}</span> €</h5>
                </li>
            </ul>
        </div>
        <div class="travel-main-page pl-4 pt-2">
            <a href="{{route("admin.travels.index")}}" class="btn btn-success">Torna alla pagina dei viaggi</a>
        </div>
    </div>
</div>
@endsection