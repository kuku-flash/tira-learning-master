@extends('layouts.teacher')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('teacher.question.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New question</span>
                    <span class="info-box-number"></span>
                  </div>
            
              </div>
<div class="card">
    <div class="card-header">
        @if(session('success'))
        <div class="mt-3 alert alert-success">
        <span> {{ session('success') }} </span>
        </div>
    @endif
      <h3 class="card-title">Questions Table</h3>
    </div>
    @if ( count($questions) > 0)
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Question</th>
            <th>Topic</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        
            @foreach($questions as $question)
          <tr>
            <td>{{ $question->id }}</td>
            <td>{{ $question->question_text }}</td>
            <td>{{ $question->topic->topic_name }}</td>
            <td>{{ $question->topic->level->level }}</td>
            <td><a href="{{route('teacher.question.edit',$question->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('teacher.question.destroy',$question->id)}}" method="post">
                  @method('DELETE')
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        {{$questions->links()}}
      </ul>
    </div>
    @else
    <p class="m-auto"> No question Founds...Please Add question</p>
    @endif
  </div>
        </div>
      </div>
    </div>
</section>
  @endsection