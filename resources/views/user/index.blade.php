@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des utilisateurs</p>
        <li>
            <a href="{{route('user.create')}}">Créer un utilisateur</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des utilisateurs</p>
        <ul>
            @foreach ($users as $user)
                <div>
                    <a href="{{route('user.edit', $user)}}">{{$user->name}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
