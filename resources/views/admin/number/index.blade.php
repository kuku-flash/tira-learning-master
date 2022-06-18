@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.number.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New number</span>
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
      <h3 class="card-title">numbers Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        @if( count ($numbers) > 0)
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th>#</th>
            <th>Option</th>
            <th>number Topic</th>
            <th>number</th>
            <th>number Written</th>
            <th>En</th>
            <th>Ar</th>
            <th>Audio</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($numbers as $number)
          <tr>
            <td>{{ $number->id }}</td>
            <td>{{ $number->option }}</td>
            <td>{{ $number->number_topic }}</td>
            <td>{{ $number->number}}</td>
            <td>{{ $number->number_written}}</td>
            <td>{{ $number->trans_eng}}</td>
            <td>{{ $number->trans_ar}}</td>
            <td>{{ $number->audio}}</td>
            <td><a href="{{route('admin.number.edit',$number->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.number.destroy',$number->id)}}" method="post">
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
          <p> No numbers Founds...Please Add</p>
        @endif

    </div>
  </div>
</div>
</section>
  @endsection