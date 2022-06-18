@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
    
  <a href="{{ route('user.level')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px;"><i class="fa fa-arrow-left"></i> course</a>
    <div class="templatemo-flex-row flex-content-row">
        <div class="col-md-12">              
          <div class="panel panel-default ">
            <div class="panel-heading text-center" style="background-color:#47768de3; "><h2>Greeting Type </h2></div>
            <div class="panel-body row">
            
              @foreach ($greetings as $greeting)

             <div class="templatemo-content-widget green-bg text-center col-md-2 " style="border-radius: 94px; box-shadow: 20px 9px 40px -22px #009688;" >              
                <a href="{{ route('user.greeting',$greeting->id)}}" class="margin-bottom-10 white-text"> 
                  <h2 class=" margin-bottom-10" >{{$greeting->main_word}}</h2> 
                </a>     
              </div>
              @endforeach
            </div>                
          </div>
        </div> 
                   
      </div>   
  
 
  </div>
@endsection