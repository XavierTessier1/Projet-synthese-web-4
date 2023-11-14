@extends('layouts.admin')

@section('contenu')
    <h1>Créer un événement</h1>
    <form action="{{route('evenement.store')}}" method="post">
        @csrf
        @include('evenement.form')
        <div>
            <button>Créer l'événement</button>
        </div>
    </form>
@endsection
