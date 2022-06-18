<?php

namespace App\Http\Controllers;

use App\Models\Alphabet;
use App\Models\Day;
use App\Models\Greeting;
use App\Models\Greeting_response;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Month;
use App\Models\Number;
use App\Models\Topic;
use App\Models\Option;
use App\Models\Question;
use App\Models\Result;
use App\Models\Question_result;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class UserLessonController extends Controller
{
    public function level(){
        $arr['levels'] = Level::All();
        $arr['topics'] = Topic::All();
        $arr['lessons'] = Lesson::All();
        return view('user.level')->with($arr);
     }
     public function lessons(Topic $topic){
         $arr['topic'] = $topic;
         $arr['lessons'] = Lesson::All();
         return view('user.lesson_list')->with($arr);
     }
    public function lesson_show(Lesson $lesson, Request $request){
        $arr['lesson'] = $lesson;
        
        $arr['lessons'] = Lesson::where('topic_id',$request->topic_id)->get();

       $arr['previous_lesson'] = Lesson::where('topic_id', $lesson->topic_id)
            ->where('position', '<', $lesson->position)
            ->orderBy('position', 'desc')
            ->first();
        $arr['next_lesson'] = Lesson::where('topic_id', $lesson->topic_id)
            ->where('position', '>', $lesson->position)
            ->orderBy('position', 'asc')
            ->first();
        #$arr['next'] = Lesson::where('position')
        return view('user.lesson')->with($arr);
    }
    public function alphabets(){
        $arr['alphabets'] = Alphabet::orderBy('letter_id','ASC')->get();
         return view('user.alphabets')->with($arr);
    }
    public function greetings(){
       // $arr['greetings'] = Greeting::orderBy('id','ASC')->get();
        $arr['greetings'] = Greeting::where('option',1)->get();
        $arr['topics'] = Topic::All();
         return view('user.greetings')->with($arr);
    }
    public function greeting(Greeting $greeting){
        $arr['greeting'] = $greeting;
        $arr['greetings'] = Greeting::all();
        $arr['greeting_responses'] = Greeting_response::All();
      
        $arr['previous_lesson'] = Greeting::where('option', '<', $greeting->option)
            ->orderBy('option', 'desc')
            ->first();
        $arr['next_lesson'] = Greeting::where('option', '>', $greeting->option)
            ->orderBy('option', 'asc')
            ->first();
        $arr['finish_lesson'] = Greeting::where('option', 2)->orWhere('option',3)
            ->orderBy('option', 'desc')
            ->first();
        $arr['greeting_id'] = Greeting::findOrFail($greeting->id);


         return view('user.greeting')->with($arr);
    }
   
    public function letter(Alphabet $alphabet){
        $arr['letter'] = $alphabet;
        $arr['previous_lesson'] = Alphabet::where('letter_id', '<', $alphabet->letter_id)
            ->orderBy('letter_id', 'desc')
            ->first();
        $arr['next_lesson'] = Alphabet::where('letter_id', '>', $alphabet->letter_id)
            ->orderBy('letter_id', 'asc')
            ->first();
         return view('user.letter')->with($arr);
    }

    public function days(){
        $arr['days'] = Day::all();
        return view('user.days')->with($arr);
    }

    public function months(){
        $arr['months'] = Month::all();
        return view('user.months')->with($arr);
    }

    public function numbers(){
        $arr['numbers'] = Number::all();
        return view('user.numbers')->with($arr);
    }

    public function quiz(Topic $topic)
    {
        $categories = Topic::where('id',$topic->id)->with(['TopicQuestions' => function ($query) {
            $query->inRandomOrder()
                ->with(['questionOptions' => function ($query) {
                    $query->inRandomOrder();
                }]);
        }])
        ->whereHas('TopicQuestions')
        ->get();

    return view('user.test', compact('categories'));
    }

    public function store(Request $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points'),
            'topic_id' => $request->topic_id
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                        
                    ]
                ];
            })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('user.result.show', $result->id);
    }

    public function showresult ($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
                $query->whereId(auth()->id());
            })->findOrFail($result_id);
        $question_results = Question_result::where('result_id',$result_id)->get();
    
        return view('user.result', compact('result','question_results'));
    }


 
}
