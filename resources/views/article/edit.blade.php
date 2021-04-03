@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>
        <form action="{{ route('article.update', $article) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value={{$article->title}}>
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if ($category->id === $article->category_id)
                            selected
                            @endif
                        >                 
                        {{$category->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Banner</label>
                <input type="file" class="form-control" name="banner">
            </div>

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" rows="5" >{{$article->content}}</textarea>
            </div>
 
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit">
            </div>
        </form>
    </div>

@endsection
