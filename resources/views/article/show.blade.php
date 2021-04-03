@extends('layouts.app')

@section('content')
        
        <div class="row justify-content-center">
        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Category: {{$article->category->name}}</p>
                    <h2>{{$article->title}}</h2>
                </div>
                <div class="row col-12">
                    <div class="col-12" style="height:400px">
                            <img style="max-width: 100%;max-height: 100%;
                            display: block;" src="<?php echo asset("uploads/banner/$article->banner")?>" alt="Image">
                        <p>
                            {{$article->content}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

@endsection
