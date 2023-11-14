@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un événement</h1>
    <form action="{{ route('evenement.update', $evenement)}}" method="post">
        @csrf
        @include('evenement.form')
        <div>
            <button>Modifier l'événement</button>
        </div>
    </form>
@endsection
