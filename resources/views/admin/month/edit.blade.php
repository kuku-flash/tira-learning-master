@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Month Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form  role="form" class="form-horizontal" method="post" action="{{route('admin.month.update',$month->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                        <label class="col-12">Option Order</label>
                        <select name="option" class="form-control">
                            <option value="{{$month->option}}">{{$month->option}}</option>
                            <option value="">Option</option>
                            <option value="1">one</option>
                        </select>
                    </div>
    
                  <div class="form-group row">
                    <label class="col-12">month</label>
                    
                      <div class="input-group mb-3 col-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text"  name="month" class="form-control @error('month') is-invalid  @enderror" value="{{ $month->month}}">
                        @error('month') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12">month Number</label>
                    
                      <div class="input-group mb-3 col-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="number"  name="month_id" class="form-control @error('month_id') is-invalid  @enderror" value="{{ $month->month_id}}">
                        @error('month') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>
               

                  <div class="form-group row">
                      <label class=" col-12">Translation</label>
                    <div class="input-group mb-3 col-6">     
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" name="trans_eng" class="form-control @error('trans_eng') is-invalid  @enderror" value="{{ $month->trans_eng}}">
                        @error('trans_eng') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                     
                      <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text"  name="trans_ar" class="form-control @error('trans_ar') is-invalid  @enderror" value="{{ $month->trans_ar}}">
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
                    @if($month->image)  
                    <img class="mt-2" src="/storage/lesson_images/{{ $month->image }}" style="width: 200px; height:100px;" > 
                    @endif
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
                    @if($month->audio)     
                     <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $month->audio }}" type="audio/mpeg" > </audio>
                    @endif
                  </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
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