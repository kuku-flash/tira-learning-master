<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arr['questions'] = Question::orderBy('topic_id','asc')->paginate(20);
        return view('admin.question.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['topics'] = Topic::all();
       $arr['levels'] = Level::all();

       return view('admin.question.create')->with($arr);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Question $question)
    {
        $this->validate($request, [
            'question_text' => 'required',
            'topic_id' => 'required',
        ]);
        $question->question_text = $request->question_text;
        $question->topic_id = $request->topic_id;
        $question->level_id = $request->level_id;
        $question->save();

        return redirect()->route('admin.question.index')->with('sucess','New Question has been Added');
     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $arr['question'] = $question;
        $arr['topics'] = Topic::all();
        $arr['levels'] = Level::all();
 
        return view('admin.question.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $this->validate($request, [
            'question_text' => 'required',
            'topic_id' => 'required',
        ]);
        $question->question_text = $request->question_text;
        $question->topic_id = $request->topic_id;
        $question->level_id = $request->level_id;
        $question->save();

        return redirect()->route('admin.question.edit',$question->id)->with('success','New Question has been Updated');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect() -> route('admin.question.index')->with('success','Deleted Successfully');
    }
}
