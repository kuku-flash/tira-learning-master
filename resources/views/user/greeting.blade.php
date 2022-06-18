@extends('layouts.learn')
@section('content')



<div class="templatemo-content-container">

  <a href="{{ route('user.greetings')}}" class="btn btn-primary back-arrow" ><i class="fa fa-arrow-left"></i> back</a>  
  <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden "> <!-- overflow hidden for iPad mini landscape view-->


  
      <div class="lesson-content-widget white-bg  text-center templatemo-position-relative" >
        <div class="suggestion row text-center">
        
          <div class="col-sm-12">
      
           
          <h2 class="text-center round-box-title font-30" >Alohiyo</h2>
          </div>
          
        </div>

       
      @if($greeting->image)
        <div class="form-group mt-2">
          <img src="/storage/lesson_images/{{ $greeting->image }}"  class="img-circle img-thumbnail margin-bottom-20" style="height: 300px; margin-top:15px;" >  
        </div>
      @endif
      <h2 class=" blue-text native-text" > {{ $greeting->main_word}}</h1>
      <h2 class=" blue-text native-text" > {{ $greeting->question}}
        <audio id="sound">
          <source src="/storage/lesson_audios/{{ $greeting->audio }}" />
        </audio>
      <button id="correct" class="speaker-icon"><i class="fa fa-volume-up speaker-color font-30"></i> </button>
     
      </h2>
      <h3 class="mt-5 trans-fonts eng" > {{ $greeting->trans_eng}}  </h3>
      <h3 class="margin-bottom-10 trans-fonts ar" >  {{ $greeting->trans_ar}} </h3>
    

  
   
    @foreach ($greeting_responses as $response)
    
      @if ($greeting->id == $response->greetings_id )
      <h2 class=" blue-text native-text"> {{ $response->response}}
        <audio id="sound">
          <source src="/storage/lesson_audios/{{ $response->audio }}" />
        </audio>
        <button id="correct" class="speaker-icon"><i class="fa fa-volume-up speaker-color font-30"></i></button>
     
      </h2>
      <h3 class="mt-5 trans-fonts eng" > {{ $response->trans_eng}}   </h3>
      <h3 class="margin-bottom-70 trans-fonts ar" >   {{ $response->trans_ar}} </h3>
      
      @endif
        
    @endforeach
   
          <div class="templatemo-social-icons-container">
        <div class="social-icon-wrap">
          @if($previous_lesson)
          <a href="{{ route('user.greeting',$greeting->id-1)}}"> <i class="fa fa-arrow-left templatemo-social-icon"></i>   </a>
          @endif
        </div>
        <div class="social-icon-wrap">
          <i class="fa fa- templatemo-social-icon"></i>  
        </div>
        <div class="social-icon-wrap">
          @if($next_lesson)
        <a href="{{ route('user.greeting',$greeting->id+1)}}"> <i class="fa fa-arrow-right templatemo-social-icon"></i></a>
        @endif
        @if(!$next_lesson )
        <a style="font-size: 10px;" href="{{ route('user.greetings')}}"> <i class="fa fa-flag templatemo-social-icon-large"></i><h2 style="margin-bottom: 2px; border-radius: 2px;color: white;font-weight: 400px;padding: 1px;background: #a6a6a6;">End</h2></a> 
        @endif
     
        </div>  
               
      </div>

    </div>

   
  </div>



  <a href="{{ route('user.greetings')}}" class="btn btn-primary back-arrow" ><i class="fa fa-arrow-left"></i> back</a>          
</div>
<script>
  const mySound = document.getElementById("sound");
  const correctButton = document.getElementById("correct");
  const wrong1 = document.getElementById("wrong1");
  const wrong2 = document.getElementById("wrong2");
  const wrong3 = document.getElementById("wrong3");

  correctButton.addEventListener("click", function(){
    mySound.play();
  });

  wrong1.addEventListener("click", wrongAnswer);
  wrong2.addEventListener("click", wrongAnswer);
  wrong3.addEventListener("click", wrongAnswer);

  function wrongAnswer(e){
      document.getElementById("wrongSound").play();
  }
</script>


@endsection