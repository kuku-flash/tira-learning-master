@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2 ">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Teachers</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.teacher.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Name</label>
                        <input type="text" class="form-control @error('teacher_name') is-invalid  @enderror" name="teacher_name" >
                        @error('teacher_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid  @enderror" name="password">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('confirm_password') is-invalid  @enderror" name="password_confirmation">
                        @error('confirm_password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Specialization</label>
                        <input type="specialization" class="form-control @error('specialization') is-invalid  @enderror" name="specialization">
                        @error('specialization')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-10">
                        <label for="" class="col-sm-4 col-form-label">Language Course </label>
                        <select class="form-control @error('language_id') is-invalid  @enderror" name="language_id" >
                              <option value="">Choose a Language</option>
                              @foreach ($languages as $language)
                              <option value="{{$language->id}}" >{{$language->name}}</option>
                              @endforeach
                             
                       
                        </select>

                        @error('language_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                   
                     
                        
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add</button>
                    <a href="{{ route('admin.teacher.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection