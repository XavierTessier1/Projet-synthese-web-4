@extends('layouts.admin')

@section('contenu')
    <h1>Modifier un forfait</h1>
    <form action="{{ route('forfait.update', $forfait)}}" method="post">
        @csrf
        @include('forfait.form')
        <div>
            <button>Modifier le forfait</button>
        </div>
    </form>
@endsection
