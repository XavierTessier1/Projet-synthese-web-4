@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des entreprises</p>
        <li>
            <a href="{{route('entreprise.create')}}">Créer une entreprise</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des entreprises</p>
        <ul>
            @foreach ($entreprises as $entreprise)
                <div>
                    <a href="{{route('entreprise.edit', $entreprise)}}">{{$entreprise->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
