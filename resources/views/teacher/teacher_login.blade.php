@extends('layouts.admin_login')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Tira Instructor</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">

            
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session tira</p>
  
        <form action="{{ route('teacher.login')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
             @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
  
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
     
    </div>
  </div>
  <!-- /.login-box -->
  
@endsection
