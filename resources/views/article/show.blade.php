@extends('layouts.app')

@section('content')
        
        <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="color:white;font-size:50px;font-weight:bold;background-color:#181D26;">{{$article->title}}<p style="color:green;font-size:20px">{{$article->category->name}}</p></div>

                <div class="card-body"> 
                    <img width="100%" height="10%" src="<?php echo asset("uploads/banner/$article->banner")?>"></img>
                </div>
                <div class="card-body"> 
                {{$article->content}}
                </div> 
            </div>
        </div>
        </div>

@endsection
