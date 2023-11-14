@extends('layouts.admin')

@section('contenu')
    <h1>Créer un utilisateur</h1>
    <form action="{{ route('user.store')}}" method="post">
        @csrf
        @include('user.form')
        <div>
            <button>Créer l'utilisateur</button>
        </div>
    </form>
@endsection
