@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
  <div class="templatemo-flex-row flex-content-row">
    <div class="col-2">         
           
      <div class="lesson-content-widget white-bg margin-auto" >
        <div class="round-box-major-title  text-center" style="background-color: #13895F; width:100%"><h2><span class="fa fa-square"> </span> Ziricoco</h2></div>
      <div class="panel-body">
      
        <div class="round-box col-md-3 " style="" > 
           
      <a class=" margin-bottom-10 text-center" href="{{ route('user.alphabets')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-sort-alpha-asc" > </span> Nguhi</h2></a>
      </div>
      <div class="round-box col-md-3 " > 
           
        <a class=" margin-bottom-10 text-center" href="{{ route('user.greetings')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-smile-o" > </span> Alohiyo</h2></a>
        </div>
      <div class="round-box   col-md-3 " > 
          
        <a class=" margin-bottom-10 text-center" href="{{ route('user.days')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-calendar" > </span> Ngomon lopoze </h2></a>
        </div>
      <div class="round-box   col-md-3 " > 
        
        <a class=" margin-bottom-10 text-center" href="{{ route('user.months')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-calendar" > </span> Ndri Nuwo</h2></a>
        </div>
      <div class="round-box  col-md-3 "  > 
        
          <a class=" margin-bottom-10 text-center" href="{{ route('user.numbers')}}"> <h2 class=" margin-bottom-10" ><span class="fa fa-sort-numeric-asc" > </span> Awumazino</h2></a>
          </div>
    </div>
      </div>
  </div></div>
  
  
        
  </div>
@endsection