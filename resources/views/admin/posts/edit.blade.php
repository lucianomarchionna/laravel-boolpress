@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica il Post</h1>
                <form action="{{ route('admin.posts.update', $post['id'] )}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{!! old('content', $post->content) !!}</textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            <option value="">Seleziona la categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}"
                                    {{ old('category_id', $post['category_id']) == $category['id'] ? 'selected' : null }}    
                                    >{{ $category['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Modifica il post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection