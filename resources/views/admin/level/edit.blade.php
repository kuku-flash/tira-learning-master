@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2">
          @if(session('success'))
          <div class="mt-3 alert alert-success">
          <span> {{ session('success') }} </span>
          </div>
          @endif
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Edit Level</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.level.update',$level->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">         
                      <div class="col-sm-12">
                        <label for="" class="col-sm-2 col-form-label">level</label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>               
                      <input type="text" class="form-control @error('level') is-invalid  @enderror" name="level" value="{{ $level->level}}">
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
                    <button type="submit" class="btn btn-info">Update</button>

                  </form>

                  <a href="{{ route('admin.level.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection