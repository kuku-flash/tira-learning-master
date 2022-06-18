@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">greeting</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.greeting.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Lesson Order</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="option">
                          <option value="">Choose a lesson order</option>
                          <option value="1">First</option>
                          <option value="1">Secong</option>
                          <option value="1">Last</option>  
                        
                        </select>
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
                        <label for="" class="col-sm-4 col-form-label">Greeting Lesson Main word</label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                        </div>
                        <input type="text" class="form-control @error('main_word') is-invalid  @enderror" name="main_word" placeholder="main_word">
                         @error('main_word') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>   
                    </div>    
                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">Greeting</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('question') is-invalid  @enderror" name="question" placeholder="question">
                     @error('question') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">English Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_eng') is-invalid  @enderror" name="trans_eng" placeholder="trans_eng">
                     @error('trans_eng') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_ar') is-invalid  @enderror" name="trans_ar" placeholder="trans_ar">
                     @error('trans_ar') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
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