<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Learn Tira</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('learning/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('learning/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('learning/css/templatemo-style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>{{Auth::user()->name}}</h1>
        </header>
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <h1 class="white-text"></h1>
        <nav class="templatemo-left-nav">          
          <ul>
   
          <li><a href="{{ route('user.level')}}" class="active"><i class="fa fa-home fa-fw"></i>Course</a></li>
            <li><a href="{{ route('profile.show') }}"><i class="fa fa-users fa-fw"></i>Account Setting</a></li>
            <li><form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-jet-responsive-nav-link href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                 <i class="fa fa-cog fa-fw"></i> {{ __('Logout') }}
              </x-jet-responsive-nav-link>
          </form></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
       
          
        
            
       
        @yield('content')
        <footer class="text-right">
            <p>Copyright &copy; 2020 Tira Learning
            | Designed by <a href="#" target="_parent">Flash Kuku</a></p>
          </footer> 
      </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('learning/js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
    <script src="{{ asset('learning/js/jquery-migrate-1.2.1.min.js')}}"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="{{ asset('learning/js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->

  </body>
</html>