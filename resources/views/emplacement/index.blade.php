@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des emplacements</p>
        <li>
            <a href="{{route('emplacement.create')}}">Créer un emplacement</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des emplacements</p>
        <ul>
            @foreach ($emplacements as $emplacement)
                <div>
                    <a href="{{route('emplacement.edit', $emplacement)}}">{{$emplacement->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
