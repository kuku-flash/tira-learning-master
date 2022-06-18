@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Edit Language</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.language.update',$language->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Language</label>
                      <div class="col-sm-10">
                                      
                      <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{ $language->name}}">
                        @error('name')
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

                  <a href="{{ route('admin.language.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection