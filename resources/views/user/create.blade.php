@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Categories name">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post">
            </div>
        </form>
    </div>

@endsection
