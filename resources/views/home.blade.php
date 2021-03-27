@extends('layouts.base',['title' =>'Accueil'])

@section('content')
<div class="mt-0 mb-3 pb-3 bg-danger">
<div class="text-center py-3 text-white container">
    <h1 class="text-white">Bienvenu sur Notre plate-forme </h1>
    <div class="divider"></div>
    Nous sommes ravi de vous comptez parmis nos meilleurs clients <br>
    <em>Louez vos véhicules pour tous vos besoins et prenez bien soin du matériel.<strong class="text-dark"> Un client obéissant est un client fidèle qui fait la joie de son fournisseur</strong> dit-on;</em>
</div>
</div>
<div class="container">
<div class="row">
    @foreach($categories as $category)
        <div class="col-md-3 p-3 bg-white m-3 text-center">
            <img src="{{ asset('storage') .'/'. $category->image }}" alt="image de voiture" class="w-100 h-75 mb-3">
            <div class="divider"></div>
            <a href="/cars/{{ $category->name }}" class="btn btn-danger mt-3">
                <span>( {{ $category->name }} )</span>
            </a>
        </div>
    @endforeach 
</div>
</div>
@stop
  