@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2 ">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">user</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{ route('admin.user.update', $user->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Name</label>
                        <input type="text" class="form-control @error('user_name') is-invalid  @enderror" name="user_name" value="{{ $user->name }}">
                        @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" value="{{ $user->email }}" disabled>
                       
                      </div>
                      
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">User Type </label>
                        <select class="form-control @error('user_type') is-invalid  @enderror" name="user_type" >
                            <option>{{ $user->type }}</option>  
                            <option value="">Choose a User Type</option>
                              <option >admin</option>
                              <option >instructor</option>
                       
                        </select>

                        @error('user_type')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                   
                     
                        
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <a href="{{ route('admin.user.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection