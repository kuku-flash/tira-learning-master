@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
  <div class="templatemo-flex-row flex-content-row">
    <div class="col-2">         
           
      <div class="panel panel-default margin-auto" >
        <div class="panel-heading text-center" style="background-color: #13895F;"><h2><span class="fa fa-star"> </span> Intro</h2></div>
      <div class="panel-body">
      
        <div class="templatemo-content-widget  col-md-3 " style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;" > 
           
      <a class=" margin-bottom-10 text-center" href="{{ route('user.alphabets')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-tasks" > </span> Alphabets</h2></a>
      </div>
      <div class="templatemo-content-widget  col-md-3 " style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;" > 
           
        <a class=" margin-bottom-10 text-center" href="{{ route('user.greetings')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-tasks" > </span> Greetings</h2></a>
        </div>
      <div class="templatemo-content-widget  col-md-3 " style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;" > 
          
        <a class=" margin-bottom-10 text-center" href="{{ route('user.days')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-tasks" > </span> Days of week</h2></a>
        </div>
      <div class="templatemo-content-widget  col-md-3 " style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;" > 
        
        <a class=" margin-bottom-10 text-center" href="{{ route('user.months')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-tasks" > </span> Month Names</h2></a>
        </div>
      <div class="templatemo-content-widget  col-md-3 " style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;" > 
        
          <a class=" margin-bottom-10 text-center" href="{{ route('user.numbers')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-tasks" > </span> Numbers</h2></a>
          </div>
    </div>
      </div>
  </div></div>
  
  
        
  </div>
@endsection