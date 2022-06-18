@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Number Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form  role="form" class="form-horizontal" method="post" action="{{route('admin.number.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label class="col-12">Option Order</label>
                        <select name="option" class="form-control">
                        
                            <option value="">Option</option>
                            <option value="1">one</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
    
                  <div class="form-group row">
                    <label class="col-12">Number</label>
                    
                      <div class="input-group mb-3 col-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text"  name="number" class="form-control @error('number') is-invalid  @enderror" placeholder="number">
                        @error('number') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12">Number Written</label>
                    
                      <div class="input-group mb-3 col-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text"  name="number_written" class="form-control @error('number_written') is-invalid  @enderror" placeholder="number_written">
                        @error('number_written') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12">Number Topic</label>
                    
                      <div class="input-group mb-3 col-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text"  name="number_topic" class="form-control @error('number_topic') is-invalid  @enderror" placeholder="number_topic">
                        @error('number_topic') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>
               

                  <div class="form-group row">
                      <label class=" col-12">Translation</label>
                    <div class="input-group mb-3 col-6">     
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" name="trans_eng" class="form-control @error('trans_eng') is-invalid  @enderror" placeholder="English Translation">
                        @error('trans_eng') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                     
                      <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text"  name="illustration_text_trans_ar" class="form-control @error('trans_ar') is-invalid  @enderror" class="form-control" placeholder="Arabic Translation">
                        @error('trans_ar') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                    
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">Illustration Image</label>
                    <div class="input-group">
                        
                      <div class="custom-file">
                        <input type="file" class="form-control @error('image') is-invalid  @enderror"  name="image">
                        @error('image') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Illustration Audio</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control @error('audio') is-invalid  @enderror"  name="audio">
                        @error('audio') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-file-audio"></i></span>
                      </div>  
                      
                    </div>
                  </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add</button>
                    <a href="{{ route('admin.number.index')}}" class="btn btn-default float-right">Back</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>
  @endsection