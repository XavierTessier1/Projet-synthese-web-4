@extends('layouts.admin')

@section('contenu')
    <h1>Modifier une entreprise</h1>
    <form action="{{ route('entreprise.update', $entreprise)}}" method="post">
        @csrf
        @include('entreprise.form')
        <div>
            <button>Modifier l'entreprise</button>
        </div>
    </form>
@endsection
