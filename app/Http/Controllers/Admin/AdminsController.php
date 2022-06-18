<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alphabet;
use App\Models\language;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Topic;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    
    public function index(){
        $arr['lessons'] = Lesson::all();
        $arr['alphabets'] = Alphabet::all();
        $arr['levels'] = Level::all();
        $arr['topics'] = Topic::all();
        $arr['languages'] = language::all();
        $arr['users'] = User::all();

        return view('admin.dashboard')->with($arr);
    }
    
}
