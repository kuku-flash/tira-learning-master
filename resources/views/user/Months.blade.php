@extends('layouts.learn')
@section('content')



<div class="templatemo-content-container">
  <a href="{{ route('user.days')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px;"><i class="fa fa-arrow-left"></i> Ngomon weeks</a>
  <a href="{{ route('user.numbers')}}" class="btn btn-primary" style="border-radius: 15px; margin-bottom: 12px; float: right; ">Auwmizino <i class="fa fa-arrow-right"></i></a>
  
  <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden "> <!-- overflow hidden for iPad mini landscape view-->
  
      <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative" style="border-radius: 34px; box-shadow: -30px -30px 19px -31px #9E9E9E;">
        <div class="suggestion row text-center">
        
          <div class="col-sm-12">
            <h2 class="text-center round-box-title blue-text" > Ndri Nuwo </h2>
          </div>
          
        </div>
        <div class="table-responsive">
        <table class="table">
            <thead>                  
              <tr>
      
                <td><b>Lomottor</b></td>
                <td><b>Uwo</b></td>
                <td><b>Ngomon</b></td>
             
            
                
              </tr>
            </thead>
            <tbody>
                @foreach($months as $month)
              <tr>
                <td>{{ $month->month_id }}</td>
                <td>{{ $month->month}}
                    <audio id="sound">
                        <source src="/storage/lesson_audios/{{ $month->audio }}" />
                      </audio>
                    <button id="correct" class="speaker-icon"><i class="fa fa-volume-up speaker-color font-20" ></i> 
                    </button>
                </td>
                <td>{{ $month->month_lenght}}
         
            
              </tr>
              @endforeach
             
    
              
            </tbody>
          </table>

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