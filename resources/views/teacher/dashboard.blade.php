@extends('layouts.teacher')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Instructor Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ Count($lessons)}}</h3>

                <p>Lessons</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{ route('teacher.lesson.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ Count($topics)}}</h3>

                <p>Topics</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ Count($questions)}}</h3>

                <p>Questions</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('teacher.question.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ Count($options)}}</h3>

                <p>Options</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{route('teacher.option.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <table class="table table-bordered table-responsive-md">
                <thead>                  
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Level</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
           
                  </tr>
                </thead>
                <tbody>
                
                    @foreach($levels as $level)
                  <tr>
                    <td>{{ $level->id }}</td>
                    <td>{{ $level->level }}</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 10%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">10%</span></td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Topics </h3>
                <table class="table table-bordered table-responsive-md">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Topic</th>
                      <th>Level</th>
                      <th style="width: 40px">language</th>
                   
                    </tr>
                  </thead>
                  <tbody>
         
                      @foreach($topics as $topic)
                    <tr>
                      <td>{{ $topic->id }}</td>
                      <td>{{ $topic->topic_name }}</td>
                      <td>{{ $topic->level->level }}</td>
                      <td>{{ $topic->language->name}}</td>
                    
                    </tr>
                    @endforeach
                   
          
                    
                  </tbody>
                </table>

              </div>
            </div>
            <!--/.direct-chat -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

     

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><<div class="container-fluid">
   
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
