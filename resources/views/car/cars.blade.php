@extends('layouts.base', ['title'=>'Véhicules à louer'])

@section('content')
    <div class="container">
        <h1 class="text-white my-3 bg-danger p-3">Véhicules disponibles pour la catégorie : {{ $category }}</h1>
        <div class="divider"></div>
        <div class="row mt-3">
            @foreach($cars as $car)
                <div class="col-sm-6 col-md-3 col-lg-3 p-3 bg-white m-3">
                    <div class="row">
                        <img src=" {{ asset('storage') .'/'. $car->image}} " alt="image voiture" class="w-100">
                    </div>
                    <p> {{ $car->mark}} </p>
                    <p class="bg-primary text-white text-center">
                        Prix de Loaction <br>
                        {{ $car->location_price}} F CFA
                    </p>
                    <a href="/" class="btn btn-danger btn-block">LOUER</a>
                </div>
            @endforeach
        </div>
    </div>
@stop