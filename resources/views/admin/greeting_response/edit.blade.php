@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-2">
            @if(session('greetings'))
                <div class="mt-3 alert alert-success">
                    <span> {{ session('greetings') }} </span>
                </div>
            @endif
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Greeting edit page</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.greeting.update', $greeting_response->greetings_id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Option</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('option') is-invalid  @enderror" name="option"  value="{{ $greeting_response->greetings->option}}"  placeholder="option Number">
                        @error('option')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
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
                            @if($greeting->id == $greeting_response->greetings_id)
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
                        <input type="text" class="form-control @error('main_word') is-invalid  @enderror" name="main_word" value="{{ $greeting_response->greetings->main_word}}" placeholder="main_word">
                         @error('main_word') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>   
                    </div>   
                    
                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">greeting </label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('question') is-invalid  @enderror" name="question" value="{{ $greeting_response->greetings->question}}">
                     @error('question') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">English Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_eng') is-invalid  @enderror" name="trans_eng" value="{{ $greeting_response->greetings->trans_eng}}" placeholder="trans_eng">
                     @error('trans_eng') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_ar') is-invalid  @enderror" name="trans_ar" value="{{ $greeting_response->greetings->trans_ar}}" placeholder="trans_ar">
                     @error('trans_ar') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>
                 
                  <div class="col-sm-12">
                    <label for="" class="col-sm-4 col-form-label">Image Optional</label>
                    <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image" value="{{ $greeting_response->greetings->image}}">
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
                    @if($greeting_response->greetings->image)
                    <img class="mt-2" src="/storage/lesson_images/{{ $greeting_response->greetings->image }}" style="width: 200px; height:100px;" > 
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
                    @if($greeting_response->greetings->audio)
                      <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $greeting_response->greetings->audio }}" type="audio/mpeg" > </audio>
                   
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

        <div class="col-md-6 mt-2">
            @if(session('greeting_response'))
                <div class="mt-3 alert alert-success">
                    <span> {{ session('greeting_response') }} </span>
                </div>
             @endif
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Greeting response edit page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('admin.greeting_response.update', $greeting_response->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Option</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('option') is-invalid  @enderror" name="option"  value="{{ $greeting_response->option}}"  placeholder="option Number">
                      @error('option')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                      <label for="" class="col-sm-4 col-form-label">Greeting_id </label>
                      <div class="input-group mb-3 col-12">  
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-cog"></i></span>
                      </div>
                      <select class="form-control @error('greetings_id') is-invalid  @enderror" name="greetings_id" >
                            <option value="">Choose a greeting question</option>
                        @foreach ($greetings as $greeting)

                            <option value="{{ $greeting->id}}"
                              @if($greeting->id == $greeting_response->greetings_id)
                              selected
                              @endif
                              >{{ $greeting->question}}</option>           
                        @endforeach
                      </select>

                      @error('greeting_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                    </div>

                  
                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">greeting response</label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('response') is-invalid  @enderror" name="response" value="{{ $greeting_response->response}}">
                   @error('response') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>

                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">English Translation</label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('trans_eng') is-invalid  @enderror" name="trans_eng" value="{{ $greeting_response->trans_eng}}" placeholder="trans_eng">
                   @error('trans_eng') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>

                <div class="col-md-12">
                  <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                  <div class="input-group mb-3 col-12">  
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                  </div>
                  <input type="text" class="form-control @error('trans_ar') is-invalid  @enderror" name="trans_ar" value="{{ $greeting_response->trans_ar}}" placeholder="trans_ar">
                   @error('trans_ar') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>   
                </div>

                  <div class="col-sm-12">
                    <label for="" class="col-sm-4 col-form-label">Image Optional</label>
                    <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image" value="{{$greeting_response->image}}">
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
                    @if($greeting_response->image)
                    <img class="mt-2" src="/storage/lesson_images/{{ $greeting_response->image }}" style="width: 200px; height:100px;" > 
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
                    @if($greeting_response->audio)
                      <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $greeting_response->audio }}" type="audio/mpeg" > </audio>
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
</section>

  @endsection