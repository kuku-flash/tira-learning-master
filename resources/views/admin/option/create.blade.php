@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">option</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.option.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      
                     
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Question </label>
                        <select class="form-control @error('question_id') is-invalid  @enderror" name="question_id" >
                              <option value="">Choose a Question</option>
                          @foreach ($questions as $question)
                              <option value="{{ $question->id}}">{{ $question->question_text}} | Topic : {{ $question->topic->topic_name}} | level {{ $question->level_id}}</option>             
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
                        <input type="text" class="form-control @error('option_text') is-invalid  @enderror" name="option_text"  placeholder="Option Title Goes here">
                        @error('option_text')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <label for="" class="col-sm-4 col-form-label">Correct or Incorrect Option</label>
                        <select class="form-control @error('points') is-invalid  @enderror" name="points"> 
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
                    <button type="submit" class="btn btn-info">Add</button>
                    <button class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection