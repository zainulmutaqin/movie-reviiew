@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Movie title">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{$category->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Banner</label>
                <input type="file" class="form-control" name="banner">
            </div>

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" rows="5" placeholder="Your review"></textarea>
            </div>
 
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post">
            </div>
        </form>
    </div>

@endsection
