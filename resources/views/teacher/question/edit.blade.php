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
                  <h3 class="card-title">Edit Question</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('teacher.question.update',$question->id)}}">
                @method('PUT')
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Topic </label>
                        <select class="form-control @error('topic_id') is-invalid  @enderror" name="topic_id" >
                            <option value="">Choose a topic</option>
                          @foreach ($topics as $topic)
                          <option value="{{ $topic->id}} " 
                            @if($topic->id == $question->topic_id)
                            selected
                            @endif>{{ $topic->topic_name}} | level {{ $topic->level_id}}</option>

                                                 
                          @endforeach
                        </select>

                        @error('topic_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="col-sm-12">
                        <label for="" class="col-sm-4 col-form-label">Question</label>
                        <input type="text" class="form-control @error('question_text') is-invalid  @enderror" name="question_text" value="{{ $question->question_text}}">
                        @error('question_text')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                     
                        
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <a href="{{ route('teacher.question.index')}}" class="btn btn-default float-right">Back</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection