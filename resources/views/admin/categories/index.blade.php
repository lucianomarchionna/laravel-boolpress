@extends('layouts.dashboard')

@section('content')

@if(session('inserted'))
    <div class="alert alert-success">
        {{ session('inserted')}}
    </div>
@endif

@if(session('updated'))
    <div class="alert alert-success">
        {{ session('updated')}}
    </div>
@endif

@if(session('deleted'))
    <div class="alert alert-danger">
        {{ session('deleted')}}
    </div>
@endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{$category['id']}}</td>
                    <td>{{$category['name']}}</td>
                    <td>{{$category['slug']}}</td>
                    <td>
                        <a href="{{ route('admin.categories.show', $category['id']) }}" class="btn btn-info">Details</a>
                        <a href="" class="btn btn-secondary">Modify</a>
                        <form class="d-inline-block delete-confirmed" style="display: inline" method="post" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection