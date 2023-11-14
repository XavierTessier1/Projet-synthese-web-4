@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des évenements</p>
        <li>
            <a href="{{route('evenement.create')}}">Créer un évenement</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des évenements</p>
        <ul>
            @foreach ($evenements as $evenement)
                <div>
                    <a href="{{route('evenement.edit', $evenement)}}">{{$evenement->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection

