@extends('layouts.app')


@section("content")
<div class="container">
    <div class="row">
        <h1 class="pt-2 pl-4 text-uppercase">Travels:</h1>
    </div>
    <div class="row">
        @foreach ($travels as $travel)
            <div class="travel-list pt-5">
                <ul>
                    <li>
                        <h3>{{$travel->journey_name}}</h3>
                        <p>{{$travel->description}}</p>
                    </li>
                </ul>
            </div>
            <div class="travel-main-page pl-4 pt-2">
                <a href="{{route("admin.travels.show", $travel)}}" class="btn btn-success">Vai alla pagina di dettaglio</a>
            </div>
        @endforeach
    </div>
</div>
@endsection