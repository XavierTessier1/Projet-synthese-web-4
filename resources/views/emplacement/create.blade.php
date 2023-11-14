@extends('layouts.admin')

@section('contenu')
    <h1>Créer un emplacement</h1>
    <form action="{{route('emplacement.store')}}" method="post">
        @csrf
        @include('emplacement.form')
        <div>
            <button>Créer l'emplacement</button>
        </div>
    </form>
@endsection
