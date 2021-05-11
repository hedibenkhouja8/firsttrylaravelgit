@extends('layouts.admin')

@section('main')
<h3><i class="fas fa-id-card"></i> Details about Client : <strong>{{ $client->nom.' '.$client->prenom  }}</strong></h3>
<div class="card" style="width: 25rem;">
    <img class="card-img-top" src="{{ $client->picture }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $client->nom.' '.$client->prenom  }}</h5>
      <li ><strong>Sport:</strong></i> {{ $client->sport }}</li>
      <br>
      <li ><strong>Age:</strong></i> {{ $client->age }}</li> <br>
      <li ><strong>Address:</strong></i> {{ $client->address }}</li> <br>
      <li ><strong>Number:</strong></i> {{ $client->phone }}</li> <br>
      <li ><strong>Date debut d'abonnement:</strong></i> {{ $client->datedebutabonnement }}</li> <br>
      <li ><strong>Date fin d'abonnement:</strong></i> {{ $client->datefinabonnement }}</li> <br>
      <li ><strong>Email:</strong></i> {{ $client->emailclient }}</li> <br>
      <li ><strong>CoachID :</strong> {{ $client->coach_id }}</li> <br>
    </div>
  </div>
@endsection