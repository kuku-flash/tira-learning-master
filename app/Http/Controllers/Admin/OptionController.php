<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['options'] = Option::orderBy('question_id','asc')->paginate(20);
        return view('admin.option.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['questions'] = Question::all();

       return view('admin.option.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Option $option)
    {
      
        $this->validate($request, [
            'option_text' => 'required',
            'points' => 'required',
            'question_id' => 'required',
        ]);
        $option->option_text = $request->option_text;
        $option->points = $request->points;
        $option->question_id = $request->question_id;
        $option->save();

        return redirect()->route('admin.option.index')->with('sucess','New Question has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $arr['option'] = $option;
        $arr['questions'] = Question::all();
 
        return view('admin.option.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        $this->validate($request, [
            'option_text' => 'required',
            'points' => 'required',
            'question_id' => 'required',
        ]);
        $option->option_text = $request->option_text;
        $option->points = $request->points;
        $option->question_id = $request->question_id;
        $option->save();

        return redirect()->route('admin.option.edit',$option->id)->with('success','New Question has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option::destroy($id);
        return redirect() -> route('admin.option.index')->with('success','Deleted Successfully');
    }
}
