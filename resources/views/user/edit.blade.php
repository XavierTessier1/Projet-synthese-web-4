@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un utilisateur</h1>
    <form action="{{ route('user.update', $user)}}" method="post">
        @csrf
        @include('user.form')
        <div>
            <button>Modifier l'utilisateur</button>
        </div>
    </form>
@endsection
