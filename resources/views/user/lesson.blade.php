@extends('layouts.learn')
@section('content')



<div class="templatemo-content-container">
  <a href="{{ route('user.lessons',$lesson->topic_id)}}" class="btn btn-primary" style="border-radius: 15px;"><i class="fa fa-arrow-left"></i> Back</a>
  <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden "> <!-- overflow hidden for iPad mini landscape view-->
   
      <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative" style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;">
        <div class="suggestion row text-center">
        
          <div class="col-sm-12">
          <div class="suggestion-box"> <div class="box-text text-uppercase blue-text" style="font-size: 35px;"> {{$lesson->topic->topic_name}}</div> </div>
          </div>
          
        </div>

      @if($lesson->image)
        <div class="form-group mt-2">
          <img src="/storage/lesson_images/{{ $lesson->image }}"  class="img-circle img-thumbnail margin-bottom-20" style="height: 300px; margin-top:15px;" >  
        </div>
      @endif
      <h2 class="text-lowercase blue-text margin-bottom-5" style="font-size: 45px; margin-top: 30px; margin-bottom:15px;"> {{ $lesson->native_trans}}
        <audio id="sound">
          <source src="/storage/lesson_audios/{{ $lesson->lesson_audio }}" />
        </audio>
      <button id="correct" style=" background-color: transparent; border: 0px;margin: auto;"><i class="fa fa-volume-up" style="color:#2196f3; font-size:30px;"></i> 
      </button>
     
      </h2>
      <h3 class="text-lowercase margin-bottom-70 mt-5" style="font-size: 40px;">{{ $lesson->eng_trans}}  | {{ $lesson->ar_trans}} </h3>
      <div class="templatemo-social-icons-container">
        <div class="social-icon-wrap">
          @if($previous_lesson)
          <a href="{{ route('user.lesson',$lesson->id-1)}}"> <i class="fa fa-arrow-left templatemo-social-icon"></i>   </a>
          @endif
        </div>
        <div class="social-icon-wrap">
          <i class="fa fa- templatemo-social-icon"></i>  
        </div>
        <div class="social-icon-wrap">
          @if($next_lesson)
        <a href="{{ route('user.lesson',$lesson->id+1)}}"> <i class="fa fa-arrow-right templatemo-social-icon"></i></a>
        @endif
        </div>                
      </div>
    </div>

   
  </div>

 

        
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