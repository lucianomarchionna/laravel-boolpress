@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Visualizzazione della categoria {{ $category->id }}</h1>
                <h2>{{ $category->title }}</h2>
                <small>Lo slug è: {{ $category->slug }}</small>
            </div>
            <div class="col-12 mt-5">
                <h2>Lista dei post collegati alla categoria: </h2>
                <ul>
                    @forelse ($category['posts'] as $post)
                        <li><a href="{{ route('admin.posts.show', $post['slug']) }}">{{ $post['title'] }}</a></li>
                    @empty
                        <p>Nessun post collegato</p>
                    @endempty
                </ul>
            </div>
        </div>
    </div>
@endsection