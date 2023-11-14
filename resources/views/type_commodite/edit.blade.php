@extends('layouts.admin')

@section('contenu')
    <h1>Modifier une commodité</h1>
    <form action="{{ route('type_commodite.update', $typeCommodite)}}" method="post">
        @csrf
        @include('type_commodite.form')
        <div>
            <button>Modifier la commodité</button>
        </div>
    </form>
@endsection
