@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mt-2">
          @if(session('success'))
          <div class="mt-3 alert alert-success">
          <span> {{ session('success') }} </span>
          </div>
          @endif
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Edit lesson</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.lesson.update',$lesson->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="" class="col-sm-4 col-form-label">Topic </label>
                            <div class="input-group mb-3 col-12">  
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-cog"></i></span>
                              </div>
                            <select class="form-control @error('topic_id') is-invalid  @enderror" name="topic_id" >
                                  <option value="">Choose a Level</option>
                              @foreach ($topics as $topic)
                                  <option value="{{ $topic->id}}"
                                    @if($topic->id == $lesson->topic_id)
                                    selected
                                    @endif >{{ $topic->topic_name}}</option>             
                              @endforeach
                            </select>
    
                            @error('topic_id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">lesson</label>
                      <input type="text" class="form-control @error('lesson_name') is-invalid  @enderror" name="lesson_name" value="{{ $lesson->lesson_name}}">
                        @error('lesson_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">English Translation</label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>
                        <input type="text" class="form-control @error('eng_trans') is-invalid  @enderror" name="eng_trans" value="{{ $lesson->eng_trans}}">
                        @error('eng_trans')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                       </div>
                      </div>
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>
                        <input type="text" class="form-control @error('eng_trans') is-invalid  @enderror" name="ar_trans" value="{{ $lesson->ar_trans}}">
                        @error('ar_trans')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Native Translation</label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>
                        <input type="text" class="form-control @error('native_trans') is-invalid  @enderror" name="native_trans" value="{{ $lesson->native_trans}}">
                        @error('native_trans')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Description</label>
                        <textarea  class="form-control @error('description') is-invalid  @enderror" name="description">{{ $lesson->description}}</textarea>
                        @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Image Optional</label>
                        <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image" value="{{ $lesson->image}}">
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
                        @if($lesson->image)
                        <img class="mt-2" src="/storage/lesson_images/{{ $lesson->image }}" style="width: 200px; height:100px;" > 
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
                        @if($lesson->lesson_audio)
                          <audio class="mt-2" controls> <source src="/storage/lesson_audios/{{ $lesson->lesson_audio }}" type="audio/mpeg" > </audio>
                        @endif
                      </div>

                      </div>
                  
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                     <a href="{{ route('admin.lesson.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection