@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des hébergements</p>
        <li>
            <a href="{{route('hebergement.create')}}">Créer un hébergement</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des hébergements</p>
        <ul>
            @foreach ($hebergements as $hebergement)
                <div>
                    <a href="{{route('hebergement.edit', $hebergement)}}">{{$hebergement->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
