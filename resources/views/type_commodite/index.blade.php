@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des commodités</p>
        <li>
            <a href="{{route('type_commodite.create')}}">Créer une commodité</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des commodités</p>
        <ul>
            @foreach ($typeCommodites as $typeCommodite)
                <div>
                    <a href="{{route('type_commodite.edit', $typeCommodite)}}">{{$typeCommodite->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
