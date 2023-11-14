@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un type d'entreprise</h1>
    <form action="{{ route('type_entreprise.update', $typeEntreprise)}}" method="post">
        @csrf
        @include('type_entreprise.form')
        <div>
            <button>Modifier le type d'entreprise</button>
        </div>
    </form>
@endsection

