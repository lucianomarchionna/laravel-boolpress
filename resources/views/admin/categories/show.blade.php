@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Visualizzazione della categoria {{ $category->id }}</h1>
                <h2>{{ $category->title }}</h2>
                <small>Lo slug è: {{ $category->slug }}</small>
            </div>
        </div>
    </div>
@endsection