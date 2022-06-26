@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
    
  <a href="{{ route('user.alphabets')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px;"><i class="fa fa-arrow-left"></i> Nguhi</a>
  <a href="{{ route('user.days')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px; float: right; ">Ngomon lopoze <i class="fa fa-arrow-right"></i></a>

        <div class="lesson-content-widget white-bg  text-center templatemo-position-relative col-md-12">              
        
            <div class="round-box-major-title text-center" ><h2>Alohyio Yittiro</h2></div>
            <div class="panel-body row">
           
            <div class="col-md-12">  
              <h2 class="text-center round-box-title " >Alohyio Yittiro: Ajuwez, imanu, anginitto</h2>
          @foreach ($greetings as $greeting)
              @if ($greeting->topic_id == 30)
             <div class="templatemo-content-widget green-bg text-center col-md-2 " style="border-radius: 94px; box-shadow: 20px 9px 40px -22px #009688;" >              
            
              <a href="{{ route('user.greeting',$greeting->id)}}" class="margin-bottom-10 white-text"> 
                  <h2 class=" margin-bottom-10" >{{$greeting->main_word}}</h2> 
                </a>     
              </div>
            @endif
                @endforeach
            </div>
            <div class="col-md-12">
              <h2 class="text-center round-box-title" >Alohiyo Yaja: Ivarrttu ne Liricoco</h2>
          @foreach ($greetings as $greeting)
              @if ($greeting->topic_id == 31)
             <div class="templatemo-content-widget green-bg text-center col-md-2 " style="border-radius: 94px; box-shadow: 20px 9px 40px -22px #009688;" >              
            
              <a href="{{ route('user.greeting',$greeting->id)}}" class="margin-bottom-10 white-text"> 
                  <h2 class=" margin-bottom-10" >{{$greeting->main_word}}</h2> 
                </a>     
              </div>
            @endif
                @endforeach
            </div>
            <div class="col-md-12">
              <h2 class="text-center round-box-title" >Amanu kazunya ne kamonddono</h2>
          @foreach ($greetings as $greeting)
              @if ($greeting->topic_id == 32)
             <div class="templatemo-content-widget green-bg text-center col-md-2 " style="border-radius: 94px; box-shadow: 20px 9px 40px -22px #009688;" >              
            
              <a href="{{ route('user.greeting',$greeting->id)}}" class="margin-bottom-10 white-text"> 
                  <h2 class=" margin-bottom-10" >{{$greeting->main_word}}</h2> 
                </a>     
              </div>
            @endif
                @endforeach
            </div>
            </div>                
          </div>
  
                   
      </div>   
  
 

@endsection