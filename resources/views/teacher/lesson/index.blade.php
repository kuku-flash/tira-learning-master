@extends('layouts.teacher')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('teacher.lesson.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New Lesson</span>
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
      <h3 class="card-title">lesson Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Topic</th>
            <th>Lesson Type</th>
            <th>english_trans</th>
            <th>arabic_trans</th>
            <th>native_trans</th>
            <th>Media</th>
            <th>lesson Order</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($lessons as $lesson)
          <tr>
            <td>{{ $lesson->id }}</td>
            <td>{{ $lesson->topic->topic_name }}</td>
            <td>{{ $lesson->lesson_name }}</td>
            <td>{{ $lesson->eng_trans }}</td>
            <td>{{ $lesson->ar_trans }}</td>
            <td>{{ $lesson->native_trans }}</td>
            <td>{{ $lesson->lesson_audio }}
              {{ $lesson->lesson_image }}
            </td>
            <td>lesson {{ $lesson->position}}</td>
            
            
            <td><a href="{{route('teacher.lesson.edit',$lesson->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="{{route('teacher.lesson.show',$lesson->id)}}" class="btn btn-app w-25"> <i class="fas fa-play"></i> View</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('teacher.lesson.destroy',$lesson->id)}}" method="post">
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
        {{$lessons->links()}}
      </ul>
    </div>
  </div>
        </div>
      </div>
    </div>
</section>
  @endsection