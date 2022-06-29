@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
    
  <a href="{{ route('user.level')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px;"><i class="fa fa-arrow-left"></i></a>
  <a href="{{ route('user.greetings')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px; float: right; ">Alohiyo <i class="fa fa-arrow-right"></i></a>
      <div class="templatemo-flex-row flex-content-row">
        <div class="lesson-content-widget white-bg col-md-12">              

            <div class="round-box-major-title text-center" style="background-color:#47768de3; "><h2>Nguhi</h2></div>
            <div class="panel-body row">
            
              @foreach ($alphabets as $alphabet)

             <div class="templatemo-content-widget green-bg text-center col-md-2 " style="border-radius: 94px; box-shadow: 20px 9px 40px -22px #009688;" >              
             <a href="{{ route('user.letter',$alphabet->id)}}" class="margin-bottom-10 white-text">  <h2 class=" margin-bottom-10" >{{ $alphabet->capital_letter}} </h2>          </a>     
              </div>
              @endforeach
            </div>                

                   
      </div>   
  </div>
@endsection