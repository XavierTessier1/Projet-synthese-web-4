@extends('layouts.admin')

@section('contenu')
    <nav>
        <p>Sous-Menu des types d'entreprises</p>
        <li>
            <a href="{{route('type_entreprise.create')}}">Créer un type d'entreprise</a>
        </li>
    </nav>

    <div>
        <p>Liste des type d'entreprises</p>
        <ul>
            @foreach ($typeEntreprises as $typeEntreprise)
                <div>
                    <a href="{{route('type_entreprise.edit', $typeEntreprise)}}">{{$typeEntreprise->nom}}</a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
