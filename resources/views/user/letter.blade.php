@extends('layouts.learn')
@section('content')
<div class="templatemo-content-container">
  <a href="{{ route('user.alphabets')}}" class="btn btn-primary" style="border-radius: 15px;"><i class="fa fa-arrow-left"></i> Nguhi</a>
      <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden "> <!-- overflow hidden for iPad mini landscape view-->
        
        <div class="lesson-content-widget white-bg  text-center templatemo-position-relative">
       
          <div class="suggestion row text-center">
            <div class="col-sm-6">
            <div class="suggestion-box "><a herf="" >  <div class="box-text text-lowercase blue-text" style="font-size: 35px;"> {{$letter->small_letter}} </div> </a></div>
            </div>
            <div class="col-sm-6">
            <div class="suggestion-box"> <div class="box-text text-uppercase blue-text" style="font-size: 35px;"> {{$letter->capital_letter}}</div> </div>
            </div>
            
          </div>
          <div class="form-group">
            <audio id="sound">
              <source src="/storage/lesson_audios/{{ $letter->letter_audio }}" />
          </audio>
            <div class="lesson-audio text-center">
              <button id="correct" style=" display: block; background-color: transparent; border: 0px;margin: auto;"><i class="fa fa-volume-up fa fa-volume-up speaker-color" style=" font-size:70px;"></i> 
              </div>
        </button>
          </div>
          
          <div class="form-group mt-2">
            <img src="/storage/lesson_images/{{ $letter->illustration_image }}"  class="img-circle img-thumbnail margin-bottom-30" style="height: 300px;">
            
          </div>
          
          <h2 class="text-lowercase blue-text margin-bottom-10" style="font-size: 45px;">{{ $letter->illustration_text }}
          
            <audio id="wrongSound">
              <source src="/storage/lesson_audios/{{ $letter->illustration_audio }}" />
            </audio>
            <button id="wrong1" style=" background-color: transparent; border: 0px;margin: auto;"><i class="fa fa-volume-up fa fa-volume-up speaker-color" style=" font-size:30px;" ></i> 
         </button>
          </h2>
          <h3 class="text-lowercase margin-bottom-70 mt-5" style="font-size: 40px;">{{ $letter->illustration_text_trans_eng }} | {{ $letter->illustration_text_trans_ar }}</h3>
          <div class="templatemo-social-icons-container">
            <div class="social-icon-wrap">
              @if($previous_lesson)
              <a href="{{ route('user.letter',$letter->id-1)}}"> <i class="fa fa-arrow-left templatemo-social-icon"></i>   </a>
              @endif
            </div>
            <div class="social-icon-wrap">
              <i class="fa fa- templatemo-social-icon"></i>  
            </div>
            <div class="social-icon-wrap">
              @if($next_lesson)
              <a href="{{ route('user.letter',$letter->id+1 )}}"> <i class="fa fa-arrow-right templatemo-social-icon"></i>  </a>
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