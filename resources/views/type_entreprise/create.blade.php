@extends('layouts.admin')

@section('contenu')
    <h1>Créer un type d'entreprise</h1>
    <form action="{{ route('type_entreprise.store')}}" method="post">
        @csrf
        @include('type_entreprise.form')
        <div>
            <button>Créer le type d'entreprise</button>
        </div>
    </form>
@endsection
