@extends('layouts.admin')

@section('contenu')
    <h1>Créer une mrc</h1>
    <form action="{{route('mrc.store')}}" method="post">
        @csrf
        @include('mrc.form')
        <div>
            <button>Créer le mrc</button>
        </div>
    </form>
@endsection
