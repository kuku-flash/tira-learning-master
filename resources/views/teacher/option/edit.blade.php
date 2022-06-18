@extends('layouts.teacher')

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
                  <h3 class="card-title">Edit option</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('teacher.option.update',$option->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      
                     
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Question </label>
                        <select class="form-control @error('question_id') is-invalid  @enderror" name="question_id" >
                              <option value="">Choose a Question</option>
                          @foreach ($questions as $question)
                              <option value="{{ $question->id}}"
                                @if($question->id == $option->question_id)
                                selected
                                @endif
                                >{{ $question->question_text}}</option>             
                          @endforeach
                          
                        </select>

                        @error('question_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                    
                          
                      <div class="col-sm-12 mt-2 mb-4">
                      <label for="" class="col-sm-4 col-form-label">Answer Option</label>
  <input type="text" class="form-control @error('option_text') is-invalid  @enderror" name="option_text"  value="{{$option->option_text}}">
                        @error('option_text')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <label for="" class="col-sm-4 col-form-label">Correct or Incorrect Option</label>
                        <select class="form-control @error('points') is-invalid  @enderror" name="points"> 
                          @if($option->points == 1)
                          <option value="{{$option->point}}">Correct</option>
                          @else
                          <option value="{{$option->point}}">Incorrect</option>
                          @endif
                          <option value="">Choose Correct or Incorrect</option>
                          <option value="1">Correct</option>
                          <option value="0">Incorrect</option>
                        </select>
                        @error('points')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror


                         </div>
            
                     
                        
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">update</button>
                    <a href="{{route('teacher.option.index')}}" class="btn btn-default float-right">Cancel</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection