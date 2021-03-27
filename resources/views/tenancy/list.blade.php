@extends('layouts.base', ['title'=> 'Locataires de voitures'])

@section('content')
<h1>Lites des personnes ayant loué de voiture chez nous</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Client</th>
      <th scope="col">Voiture louée</th>
      <th scope="col">Date de la location</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tenancies as $tenancy)
    <tr>
      <th scope="row">1</th>
      <td> {{ $tenancy->user }}</td>
      <td>{{ $tenancy->car}}</td>
      <td>{{$tenancy->located_at}}</td>
    </tr>
@endforeach
  </tbody>
</table>

@stop