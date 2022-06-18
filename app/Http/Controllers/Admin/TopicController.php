<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Level;
use App\Models\language;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['topics'] = Topic::orderBy('level_id','desc')->paginate(20);

        return view('admin.topic.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['languages'] = language::all();
        $arr['levels'] = level::all();

       return view('admin.topic.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Topic $topic)
    {
        $this->validate($request,[
            'topic_name' => 'required',
            'language_id' => 'required',
            'level_id' => 'required',
        ]);

        $topic->topic_name = $request->topic_name;
        $topic->language_id = $request->language_id;
        $topic->level_id = $request->level_id;
        $topic->save();
        return redirect()->route('admin.topic.index')->with('success','New Topic added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        $arr['topic'] = $topic;
        $arr['languages'] = language::all();
        $arr['levels'] = Level::all();

       return view('admin.topic.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $this -> validate($request,[
            'topic_name' => 'required',
            'language_id' => 'required',
            'level_id' => 'required',
        ]);

        $topic->topic_name = $request->topic_name;
        $topic->language_id = $request->language_id;
        $topic->level_id = $request->level_id;
        $topic->save();
        return redirect()->route('admin.topic.edit',$topic->id)->with('success','New Topic Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topic::destroy($id);
        return redirect() -> route('admin.topic.index')->with('success','Deleted Successfully');
    }
}
