@extends('layouts.app')

@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><b>List Article</b></h1>
                <br>
                <a href="{{ route('article.create') }}" class=" btn btn-sm btn-primary"><i class="fas fa-plus"></i> Create Article</a>      
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 300px;">
                   <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Category</th>
                      <th style="width:200px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach ($articles as $a)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$a->title}}</td>
                      <td>{{$a->slug}}</td>
                      <td>{{$a->category->name}}</td>
                      <td>
                        <form action="{{ route('article.destroy', $a) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <a href="{{ route('article.show',$a->id) }}" class=" btn btn-sm btn-warning">Detail</a>
                            <a href="{{ route('article.edit',$a->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection