@extends('layouts.app')

@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><b>List Category</b></h1>
                <br>
                <a href="{{ route('category.create') }}" class=" btn btn-sm btn-primary"><i class="fas fa-plus"></i> Create Category</a>      
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
                      <th>Name</th>
                      <th>Slug</th>
                      <th style="width:200px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach ($categories as $a)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$a->name}}</td>
                      <td>{{$a->slug}}</td>
                      <td>
                        <form action="{{ route('category.destroy', $a) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <a href="{{ route('category.edit',$a->id) }}" class=" btn btn-sm btn-primary">Edit</a>
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