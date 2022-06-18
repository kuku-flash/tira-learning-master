@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 m-auto">
          @if(session('greeting'))
              <div class="mt-3 alert alert-success">
                  <span> {{ session('greeting') }} </span>
              </div>
          @endif
          <div class="card mt-2">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Greeting edit page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('admin.greeting.update', $greeting->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Lesson Order</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="option">
                        <option value="{{$greeting->option}}">{{$greeting->option}}</option>
                        <option value="">Choose a lesson order</option>
                        <option value="1">First</option>
                        <option value="2">Secong</option>
                        <option value="3">Last</option>  
                      
                      </select>
                      @error('option')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    </div>
                 
                    <div class="col-md-12">
                      <label for="" class="col-sm-4 col-form-label">Topic </label>
                      <div class="input-group mb-3 col-12">  
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-cog"></i></span>
                      </div>
                      <select class="form-control @error('topic_id') is-invalid  @enderror" name="topic_id" >
                            <option value="">Choose a Topic</option>
                        @foreach ($topics as $topic)
                        <option value="{{ $topic->id}}"
                          @if($greeting->id == $greeting->topic_id)
                          selected
                          @endif
                          >{{ $topic->topic_name}}</option>            
                        @endforeach
                      </select>

                      @error('topic_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                    </div>

                    <div class="col-md-12">
                      <label for="" class="col-sm-4 col-form-label">Greeting Lesson Main word</label>
                      <div class="input-group mb-3 col-12">  
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                      </div>
                      <input type="text" class="form-control @error('main_word') is-invalid  @enderror" name="main_word" value="{{ $greeting->main_word}}" placeholder="main_word">
                       @error('main_word') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                      </div>   
                  </div>   
                  
                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">greeting </label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('question') is-invalid  @enderror" name="question" value="{{ $greeting->question}}">
                   @error('question') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>

                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">English Translation</label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('trans_eng') is-invalid  @enderror" name="trans_eng" value="{{ $greeting->trans_eng}}" placeholder="trans_eng">
                   @error('trans_eng') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>

                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('trans_ar') is-invalid  @enderror" name="trans_ar" value="{{ $greeting->trans_ar}}" placeholder="trans_ar">
                   @error('trans_ar') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>
               
                <div class="col-sm-12">
                  <label for="" class="col-sm-4 col-form-label">Image Optional</label>
                  <div class="input-group">
                  <div class="custom-file">
                  <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image" value="{{ $greeting->image}}">
                  @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                  </div>
                  </div>
                  @if($greeting->image)
                  <img class="mt-2" src="/storage/lesson_images/{{ $greeting->image }}" style="width: 200px; height:100px;" > 
                  @endif
                </div>

                <div class="col-sm-12">
                  <label for="" class="col-sm-4 col-form-label">Audio Optional</label>
                  <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="form-control @error('audio') is-invalid  @enderror" name="audio" >
                      @error('audio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-image"></i></span>
                    </div>
                  </div>
                  @if($greeting->audio)
                    <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $greeting->audio }}" type="audio/mpeg" > </audio>
                 
                      @endif
                </div>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <a href="{{ route('admin.greeting_response.index')}}" class="btn btn-default float-right">Back</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
      </div>

      </div>
      </div>
    </div>
</section>

  @endsection