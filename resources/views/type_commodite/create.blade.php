@extends('layouts.admin')

@section('contenu')
    <h1>Créer une commodité</h1>
    <form action="{{route('type_commodite.store')}}" method="post">
        @csrf
        @include('type_commodite.form')
        <div>
            <button>Créer la commodité</button>
        </div>
    </form>
@endsection
