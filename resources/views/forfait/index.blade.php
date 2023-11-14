@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des forfaits</p>
        <li>
            <a href="{{route('forfait.create')}}">Créer un forfait</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des forfaits</p>
        <ul>
            @foreach ($forfaits as $forfait)
                <div>
                    <a href="{{route('forfait.edit', $forfait)}}">{{$forfait->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
