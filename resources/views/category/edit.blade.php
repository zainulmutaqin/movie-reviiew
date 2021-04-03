@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>
        <form action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value={{$category->name}}>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit">
            </div>
        </form>
    </div>

@endsection
