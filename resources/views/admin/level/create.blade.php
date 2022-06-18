@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Level</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.level.store')}}">
                @csrf
                  <div class="card-body">
                      <div class="col-sm-12">
                        <label for="" class="col-sm-2 col-form-label">Level: </label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>
                        <input type="text" class="form-control @error('level') is-invalid  @enderror" name="level" placeholder="level Name">
                        @error('level')
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
                    <a href="{{ route('admin.level.index')}}" class="btn btn-default float-right">Cancel</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection