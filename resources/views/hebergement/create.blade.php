@extends('layouts.admin')

@section('contenu')
    <h1>Créer un hébergement</h1>
    <form action="{{ route('hebergement.store')}}" method="post">
        @csrf
        @include('hebergement.form')
        <div>
            <button>Créer l'hébergement</button>
        </div>
@endsection
