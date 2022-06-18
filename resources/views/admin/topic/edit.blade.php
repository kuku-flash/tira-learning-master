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
                  <h3 class="card-title">Edit topic</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.topic.update',$topic->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                    
                      <div class="col-sm-12">
                        <label for="" class="col-sm-2 col-form-label">Topic: </label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                          </div>
                      <input type="text" class="form-control @error('topic') is-invalid  @enderror" name="topic_name" value="{{ $topic->topic_name }}">
                        @error('topic')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <label for="" class="col-sm-2 col-form-label">Level: </label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-cog"></i></span>
                          </div>
                        <select class="form-control @error('level_id') is-invalid  @enderror" name="level_id">
                          <option value="0">Choose a Level</option>

                          @foreach ($levels as $level)
                        <option value="{{ $level->id}}" 
                          @if($level->id == $topic->level_id)
                          selected
                          @endif >{{ $level->level}}</option>
                        
                          @endforeach
                        </select>
                        @error('level_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <label for="" class="col-sm-2 col-form-label">Language: </label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-cog"></i></span>
                          </div>
                        <select class="form-control @error('language_id') is-invalid  @enderror" name="language_id" >
                          <option value="0">Choose a Language</option>

                          @foreach ($languages as $language)
                        <option value="{{ $language->id}} " 
                          @if($language->id == $topic->language_id)
                          selected
                          @endif>{{ $language->name}}</option>
                              
                          @endforeach
                        </select>
                        @error('language_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      </div>
                   
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>

                  </form>

                  <a href="{{ route('admin.topic.index')}}" class="btn btn-default float-right"> Back </a>
                  </div>
                  <!-- /.card-footer -->
                
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection