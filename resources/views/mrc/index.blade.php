@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des mrc</p>
        <li>
            <a href="{{route('mrc.create')}}">Créer une mrc</a>
        </li>
    </nav>

    <div class="list">
        <p>Liste des mrc</p>
        <ul>
            @foreach ($mrcs as $mrc)
                <div>
                    <a href="{{route('mrc.edit', $mrc)}}">{{$mrc->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
