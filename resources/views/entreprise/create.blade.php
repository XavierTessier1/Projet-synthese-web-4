@extends('layouts.admin')

@section('contenu')
    <h1>Créer une entreprise</h1>
    <form action="{{ route('entreprise.store')}}" method="post">
        @csrf
        @include('entreprise.form')
        <div>
            <button>Créer l'entreprise</button>
        </div>
    </form>
@endsection
