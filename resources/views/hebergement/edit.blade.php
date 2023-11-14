@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un hébergement</h1>
    <form action="{{ route('hebergement.update', $hebergement)}}" method="post">
        @csrf
        @include('hebergement.form')
        <div>
            <button>Modifier l'hébergement</button>
        </div>
    </form>
@endsection
