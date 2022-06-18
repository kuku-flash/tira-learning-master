@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-2">

  <div class="card">
    <div class="card-header">
      @if(session('success'))
        <div class="mt-3 alert alert-success">
           <span> {{ session('success') }} </span>
        </div>
      @endif
    <h3 class="card-title"><b>Greeting_response Table</b></h3>
  </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Main Words</th>
            <th>Greetings</th>
            <th>Responses</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($greeting_responses as $greeting_response)
          <tr>
            <td>{{ $greeting_response->id }}</td>
            <td><p style="color: #007bff;"> {{ $greeting_response->greetings->main_word }}  </p></td>
            <td>
              <p style="color: #007bff;"> {{ $greeting_response->greetings->question }}  </p>
              <p style="color: #28a745;"> {{ $greeting_response->greetings->trans_eng }} </p>
              <p style="color: #dc3545;"> {{ $greeting_response->greetings->trans_ar }} </p>

            </td>
            <td>
              <p style="color: #007bff;"> {{ $greeting_response->response }} </p>
              <p style="color: #28a745;"> {{ $greeting_response->trans_eng }} </p>
              <p style="color: #dc3545;"> {{ $greeting_response->trans_ar }} </p>
            </td>
           
            <td><a href="{{route('admin.greeting_response.edit',$greeting_response->id)}}" class="btn btn-app w-25"> <i class="fas fa-edit"></i> Edit</a>
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fas fa-trash"></i>delete</a>
                <form action="{{ route('admin.greeting_response.destroy',$greeting_response->id)}}" method="post">
                  @method('DELETE')
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th style="width: 10px">#</th>
            <th>Main Words</th>
            <th>Greetings</th>
            <th>Responses</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
        </div>
      </div>
    </div>
</section>

  @endsection

  