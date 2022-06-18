@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
            <div class="info-box">
               
            <span class="info-box-icon bg-info"><a href="{{ route('admin.alphabet.create')}}" ><i class="fa fa-plus"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add New Letter</span>
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
      <h3 class="card-title">Alphabets Table</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-responsive-md">
        <thead>                  
          <tr>
            <th >#</th>
            <th>Small</th>
            <th>Captail</th>
            <th>Illustration Text</th>
            <th>Arabic_trans</th>
            <th>English_trans</th>
            <th>Media</th>
            
            <th>Language</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($alphabets as $alphabet)
          <tr>
            <td>{{ $alphabet->id }}</td>
            <td>{{ $alphabet->small_letter }}</td>
            <td>{{ $alphabet->capital_letter }}</td>
            <td>{{ $alphabet->illustration_text }}</td>
            <td>{{ $alphabet->illustration_text_trans_ar }}</td>
            <td>{{ $alphabet->illustration_text_trans_eng }}</td>
            <td> <p> Image:{{ $alphabet->illustration_image }} </p>
            <p> audio: {{ $alphabet->illustration_audio }}</p>
            </td>
            
            <td> {{ $alphabet->language->name  }}</td>
            
            
            <td><a href="{{route('admin.alphabet.edit',$alphabet->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="{{route('admin.alphabet.show',$alphabet->id)}}" class="btn btn-app w-25"> <i class="fas fa-play"></i> View</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.alphabet.destroy',$alphabet->id)}}" method="post">
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