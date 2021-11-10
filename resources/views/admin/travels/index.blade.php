@extends('layouts.app')


@section("content")
<div class="container">
    <div class="row justify-content-center">
        <h1 class="pt-2 text-uppercase">Travels:</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            @foreach ($travels as $travel)
                <div class="travel-list pt-5">
                    <ul>
                        <li>
                            <h3>{{$travel->journey_name}}</h3>
                            <p>{{$travel->description}}</p>
                        </li>
                    </ul>
                </div>
                <div class="travel-main-page pt-2 d-flex justify-content-center">
                    <a href="{{route("admin.travels.show", $travel)}}" class="btn btn-success">Vai alla pagina di dettaglio</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection