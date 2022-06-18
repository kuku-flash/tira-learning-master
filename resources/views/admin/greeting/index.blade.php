@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.greeting.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add Greeting</span>
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
      <h3 class="card-title">Greeting Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Main Word</th>
            <th>Greetings</th>
            <th>Lesson Order</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach($greetings as $greeting)
          <tr>
            <td>{{ $greeting->id }}</td>
            <td>{{ $greeting->main_word }}</td>
            <td>{{ $greeting->question }}</td>
            <td>
              @switch($greeting->option)
                  @case(1)
                      first
                      @break
                  @case(2)
                      second
                      @break
                  @case(3)
                      last
                      @break
                  @default
                      
              @endswitch
            </td>
            <td><a href="{{route('admin.greeting.edit',$greeting->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.greeting.destroy',$greeting->id)}}" method="post">
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
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>
        </div>
      </div>
    </div>
</section>
  @endsection