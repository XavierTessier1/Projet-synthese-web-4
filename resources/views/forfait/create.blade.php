@extends('layouts.admin')

@section('contenu')
    <h1>Créer un forfait</h1>
    <form action="{{ route('forfait.store')}}" method="post">
        @csrf
        @include('forfait.form')
        <div>
            <button>Créer le forfait</button>
        </div>
    </form>
@endsection
