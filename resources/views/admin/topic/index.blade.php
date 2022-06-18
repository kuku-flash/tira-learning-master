@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.topic.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New Topic</span>
                    <span class="info-box-number"></span>
                  </div>
            
              </div>
<div class="card">
    <div class="card-header">
        @if(session('success'))
        <div class="mt-3 alert alert-success ">
        <span> {{ session('success') }} </span>
        </div>
    @endif
      <h3 class="card-title">Topic Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Topic</th>
            <th>Level</th>
            <th style="width: 40px">language</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @if( count ($topics) > 0)
            @foreach($topics as $topic)
          <tr>
            <td>{{ $topic->id }}</td>
            <td>{{ $topic->topic_name }}</td>
            <td>{{ $topic->level->level }}</td>
            <td>{{ $topic->language->name}}</td>
            <td><a href="{{route('admin.topic.edit',$topic->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.topic.destroy',$topic->id)}}" method="post">
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
      {{$topics->links()}}
    </div>
  </div>
        @else 
          <p> No Topics Founds...Please Add</p>
        @endif

    </div>
  </div>
</div>
</section>
  @endsection