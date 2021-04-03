@extends('layouts.app')

@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><b>My Profile</b></h1>
                <br>
                <a href="{{ route('user.password.edit') }}" class=" btn btn-sm btn-primary"><i class="fas fa-lock"></i> Edit Password</a>      
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Joined on</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$profile->name}}</td>
                      <td>{{$profile->email}}</td>
                      <td><?php setlocale(LC_TIME, 'Indonesian');
                          echo strftime("%d %B %Y", strtotime( $profile->created_at));?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection