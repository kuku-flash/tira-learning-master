@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">

  <a href="{{ route('user.level')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px;"><i class="fa fa-arrow-left"></i> course</a>
<div class="templatemo-flex-row flex-content-row">
  
    <div class="col-2">            
      <div class="panel panel-default margin-auto">
        <div class="panel-heading text-center" style="background-color: #13895F;"><h2>{{$topic->topic_name}}</h2></div>
        <div class="panel-body">
        
          @if(count($lessons)>0)
          @foreach ($lessons as $lesson)
          @if($topic->id == $lesson->topic_id )
          <div class="templatemo-content-widget green-bg col-md-3 text-x" style="background-color: #39adb4db;" > 
    
         
            <a  style="color: azure; font-size: 19px;" href="{{ route('user.lesson', [$lesson->id, $lesson->topic_id])}}">             
              {{ $lesson->native_trans}} </a>
          
              
          </div>
          @endif
          @endforeach
          
      </div>
      
      <div class="card row green-bg text-x text-center" style="    
        margin: auto;
        width: 15%;
        padding: 21px;
        margin-bottom: 12px;
        border-radius: 33px;" >
          <a href="{{route('user.test',$topic->id)}}" class="col-md-3 " style="color: aliceblue; text-align:center; font-size:16px;">Quiz</a>
        </div>
        @else
        <div>
        <p style="color: #4CAF50">No lessons found</p>
        </div>
        
        @endif
        
       
    </div> 
                              
  </div>  
        
</div>
@endsection