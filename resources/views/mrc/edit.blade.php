@extends('layouts.admin')

@section('contenu')
    <h1>Modifier une mrc</h1>
    <form action="{{ route('mrc.update', $mrc)}}" method="post">
        @csrf
        @include('mrc.form')
        <div>
            <button>Modifier la mrc</button>
        </div>
    </form>
@endsection
