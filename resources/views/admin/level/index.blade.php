@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.level.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New level</span>
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
      <h3 class="card-title">level Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Levels</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @if ( count($levels) > 0)
            @foreach($levels as $level)
          <tr>
            <td>{{ $level->id }}</td>
            <td>{{ $level->level }}</td>
            
            <td><a href="{{route('admin.level.edit',$level->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.level.destroy',$level->id)}}" method="post">
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
        {{$levels->links()}}
      </ul>
    </div>
    @else
    <p> No Level Founds...Please Add Level</p>
    @endif
  </div>
        </div>
      </div>
    </div>
</section>
  @endsection