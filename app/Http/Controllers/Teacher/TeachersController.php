<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Alphabet;
use App\Models\language;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Option;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        $arr['lessons'] = Lesson::all();
        $arr['alphabets'] = Alphabet::all();
        $arr['levels'] = Level::all();
        $arr['topics'] = Topic::all();
        $arr['languages'] = language::all();
        $arr['questions'] = Question::all();
        $arr['options'] = Option::all();
 
        return view('teacher.dashboard')->with($arr);
    }
}
