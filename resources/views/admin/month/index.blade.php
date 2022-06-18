@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.month.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New month</span>
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
      <h3 class="card-title">months Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        @if( count ($months) > 0)
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th>#</th>
            <th>month ID</th>
            <th>Option</th>
            <th>month</th>
            <th>En</th>
            <th>Ar</th>
            <th>Audio</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($months as $month)
          <tr>
            <td>{{ $month->id }}</td>
            <td>{{ $month->month_id }}</td>
            <td>{{ $month->option }}</td>
            <td>{{ $month->month}} / {{ $month->month_lenght}} </td>
            <td>{{ $month->trans_eng}}</td>
            <td>{{ $month->trans_ar}}</td>
            <td>{{ $month->audio}}</td>
            <td><a href="{{route('admin.month.edit',$month->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.month.destroy',$month->id)}}" method="post">
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
   
    </div>
  </div>
        @else 
          <p> No months Founds...Please Add</p>
        @endif

    </div>
  </div>
</div>
</section>
  @endsection