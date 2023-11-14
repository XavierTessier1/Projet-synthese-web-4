@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un emplacement</h1>
    <form action="{{ route('emplacement.update', $emplacement)}}" method="post">
        @csrf
        @include('emplacement.form')
        <div>
            <button>Modifier l'emplacement</button>
        </div>
    </form>
@endsection
