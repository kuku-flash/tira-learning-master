@extends('layouts.teacher')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">lesson</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('teacher.lesson.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="" class="col-sm-4 col-form-label">Topic </label>
                            <div class="input-group mb-3 col-12">  
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-cog"></i></span>
                            </div>
                            <select class="form-control @error('topic_id') is-invalid  @enderror" name="topic_id" >
                                  <option value="">Choose a Topic</option>
                              @foreach ($topics as $topic)
                                  <option value="{{ $topic->id}}">{{ $topic->topic_name}}</option>             
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
                        <label for="" class="col-sm-4 col-form-label">lesson Type</label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-cog"></i></span>
                        </div>
                        <select class="form-control @error('lesson_name') is-invalid  @enderror" name="lesson_name">
                          <option>Reading</option>
                          <option></option>
                        </select>
                        @error('lesson_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Native Translation</label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" class="form-control @error('native_trans') is-invalid  @enderror" name="native_trans" placeholder="Native translation">
                         @error('native_trans') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>   
                      </div>

                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">English Translation</label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" class="form-control @error('eng_trans') is-invalid  @enderror" name="eng_trans" placeholder="English translation">
                        @error('eng_trans')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" class="form-control @error('eng_trans') is-invalid  @enderror" name="ar_trans" placeholder="Arabic translation">
                        @error('ar_trans')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                    
                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Lesson Position</label>
                        <div class="input-group mb-3 col-12">  
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-arrow-down"></i></span>
                          </div>
                          <select name="position" class="form-control @error('position') is-invalid  @enderror" >
                            <option value="">Choose Lesson Order</option>
                            <option value="1">lesson 1</option>
                            <option value="2">lesson 2</option>
                            <option value="3">lesson 3</option>
                            <option value="4">lesson 4</option>
                            <option value="5">lesson 5</option>
                            <option value="6">lesson 6</option>
                            <option value="7">lesson 7</option>
                            <option value="8">lesson 8</option>
                          </select>
                      
                      </div>
                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Image Optional</label>
                        <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image" placeholder="image Goes here..">
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
                      </div>

                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Audio Optional</label>
                        <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="form-control @error('audio') is-invalid  @enderror" name="audio" placeholder="audio Goes here..">
                          @error('audio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-file-audio"></i></span>
                        </div>  
                       </div>
                      </div>

                    
                        
                    </div>
                 
                  
                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add</button>
                    <a href="{{route('teacher.lesson.index')}}" class="btn btn-default float-right">Cancel</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>

              


        </div>
      </div>
    </div>
</section>
  @endsection