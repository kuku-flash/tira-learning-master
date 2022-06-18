@extends('layouts.teacher')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mt-2">
           
              

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-text-width"></i>
                      Single Lesson Details 
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body ">
                    <dl class="row">
                      <dt class="col-md-4">Topic </dt>
                      <dd class="col-md-8">{{ $lesson->topic->topic_name}}</dd>

                      <dt class="col-sm-4">lesson</dt>
                      <dd class="col-sm-8">{{ $lesson->lesson_name}} </dd>

                      <dt class="col-sm-4">English Translation</dt>
                      <dd class="col-sm-8">{{ $lesson->eng_trans}}</dd>

                      <dt class="col-sm-4">Arabic Translation</dt>
                      <dd class="col-sm-8">{{ $lesson->ar_trans}}   </dd>

                      <dt class="col-sm-4">Native Translation</dt>
                      <dd class="col-sm-8">{{ $lesson->native_trans}}   </dd>

                      @if($lesson->description)
                      <dt class="col-sm-4">Description</dt>
                      <dd class="col-sm-8">{{ $lesson->description}}  </dd>
                      @endif

                      @if($lesson->image)
                      <dt class="col-sm-4">Image </dt>
                      <dd class="col-sm-8"><img src="/storage/lesson_images/{{ $lesson->image }}" style="width: 100px; height:100px;" > </dd>
                      @endif

                      @if($lesson->lesson_audio)
                      <dt class="col-sm-4"> Audio </dt>
                      <dd class="col-sm-8"><audio controls> <source src="/storage/lesson_audios/{{ $lesson->lesson_audio }}" type="audio/mpeg" > </audio> </dd>
                      @endif

                    </dl>
                  </div>
                  <!-- /.card-body --> <a href="{{ route('teacher.lesson.index')}}" class="btn btn-default float-right"> Back </a>
                </div>
                <!-- /.card -->
              </div>


        </div>
      </div>
    </div>
</section>
  @endsection