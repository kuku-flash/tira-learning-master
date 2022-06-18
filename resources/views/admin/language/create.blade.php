@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Language</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.language.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Language</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" placeholder="Language Name">
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
                    <button type="submit" class="btn btn-info">Add</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>

  @endsection