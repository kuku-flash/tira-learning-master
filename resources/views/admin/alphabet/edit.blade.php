@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">alphabet</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form  role="form" class="form-horizontal" method="post" action="{{route('admin.alphabet.update',$alphabet->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                        <select name="language_id" class="form-control">
                        
                            <option value="">Language</option>
                            @foreach ($languages as $language)
                            <option value="{{$language->id}}"
                                @if ($language->id == $alphabet->language_id)
                                selected 
                                @endif> {{$language->name}}</option>
                            @endforeach
                        </select>
      
                    </div>
                  <div class="form-group row">
                    <label class="text-center col-12">Letter</label>
                    <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text" name="small_letter" class="form-control @error('small_letter') is-invalid  @enderror" value="{{$alphabet->small_letter}}">
                        @error('small_letter') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                      <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-language"></i></span>
                        </div>
                        <input type="text"  name="capital_letter" class="form-control @error('capital_letter') is-invalid  @enderror" value="{{$alphabet->capital_letter}}">
                        @error('capital_letter') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Letter Voice Note</label>
                    <div class="input-group">
                        
                      <div class="custom-file">
                        <input type="file" class="form-control  @error('letter_audio') is-invalid  @enderror" id="exampleInputFilew" name="letter_audio">
                        @error('letter_audio') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-file-audio"></i></span>
                      </div>
                    </div>
                    <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $alphabet->letter_audio }}" type="audio/mpeg" > </audio>
                  </div>

                  <div class="form-group row">
                    <label class="text-center col-12">Example</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" name="illustration_text" class="form-control @error('illustration_text') is-invalid  @enderror" value="{{$alphabet->illustration_text}}">
                        @error('illustration_text') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                     
                  </div>
                  <div class="form-group row">
                      <label class="text-center col-12">Translation</label>
                    <div class="input-group mb-3 col-6">     
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" name="illustration_text_trans_eng" class="form-control @error('illustration_text_trans_eng') is-invalid  @enderror" value="{{$alphabet->illustration_text_trans_eng}}">
                        @error('illustration_text_trans_eng') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                     
                      <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text"  name="illustration_text_trans_ar" class="form-control @error('illustration_text_trans_ar') is-invalid  @enderror" class="form-control" value="{{$alphabet->illustration_text_trans_ar}}">
                        @error('illustration_text_trans_ar') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                    </div>
                    
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">Illustration Image</label>
                    <div class="input-group">
                        
                      <div class="custom-file">
                        <input type="file" class="form-control @error('illustration_image') is-invalid  @enderror"  name="illustration_image">
                        @error('illustration_image') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror  
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                      </div>
                    </div>
                    <img class="mt-2" src="/storage/lesson_images/{{ $alphabet->illustration_image }}" style="width: 200px; height:100px;" > 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Illustration Audio</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control @error('illustration_audio') is-invalid  @enderror"  name="illustration_audio">
                        @error('illustration_audio') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-file-audio"></i></span>
                      </div>  
                    </div>
                    <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $alphabet->illustration_audio }}" type="audio/mpeg" > </audio>
                  </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <a href="{{ route('admin.alphabet.index')}}" class="btn btn-default float-right">Back</a>
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