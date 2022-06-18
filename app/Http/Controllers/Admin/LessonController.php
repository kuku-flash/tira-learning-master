<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Lesson;
use App\Models\Topic;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['lessons'] = Lesson::paginate(20);
        return view('admin.lesson.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['topics'] = Topic::all();
        return view('admin.lesson.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lesson $lesson)
    {
        $this->validate($request,[
            'topic_id' => 'required',
            'lesson_name' => 'required',
            
            'native_trans' => 'required',
          
            'image' => 'image|nullable|max:1999',
            'audio' => 'mimes:mp3,wav|nullable|max:5000',
        ]);
            //Handle File Upload
            if($request->hasFile('image')){
                // Get filename with the extension
                $imagenamewithExt = $request->file('image')->getClientOriginalName();
                //Get just filename
                $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // FileName to Store
                $imageNameToStore = $imagename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('image')->storeAs('public/lesson_images', $imageNameToStore);
            } else{
                $imageNameToStore = '';
            }

            if($request->hasFile('audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('audio')->getClientOriginalExtension();
                // FileName to Store
                $audioNameToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('audio')->storeAs('public/lesson_audios', $audioNameToStore);
            } else{
                $audioNameToStore = '';
            }

        $lesson->lesson_name = $request->lesson_name;
        $lesson->topic_id = $request->topic_id;
        $lesson->eng_trans = $request->eng_trans;
        $lesson->ar_trans = $request->ar_trans;
        $lesson->native_trans = $request->native_trans;
        $lesson->description = $request->description;
        $lesson->image =  $imageNameToStore;
        $lesson->lesson_audio = $audioNameToStore;
        $lesson->save();
        return redirect()->route('admin.lesson.index')->with('success','New lesson added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        $arr['lesson'] = $lesson;
        return view('admin.lesson.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $arr['lesson'] = $lesson;
        $arr['topics'] = Topic::all();
        return view('admin.lesson.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $this->validate($request,[
            'topic_id' => 'required',
            'lesson_name' => 'required',
            'eng_trans' => 'required',
   
            'native_trans' => 'required',
       
            'image' => 'image|nullable|max:1999',
            'audio' => 'mimes:mp3,wav|nullable|max:5000',
            
        ]);
            //Handle File Upload
            if($request->hasFile('image')){
                // Get filename with the extension
                $imagenamewithExt = $request->file('image')->getClientOriginalName();
                //Get just filename
                $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // FileName to Store
                $imageNameToStore = $imagename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('image')->storeAs('public/lesson_images', $imageNameToStore);
            }

            if($request->hasFile('audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('audio')->getClientOriginalExtension();
                // FileName to Store
                $audioNameToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('audio')->storeAs('public/lesson_audios', $audioNameToStore);
            } 

        $lesson->lesson_name = $request->lesson_name;
        $lesson->topic_id = $request->topic_id;
        $lesson->eng_trans = $request->eng_trans;
        $lesson->ar_trans = $request->ar_trans;
        $lesson->native_trans = $request->native_trans;
        $lesson->description = $request->description;
        if($request->hasFile('image')){
            
            $lesson->image =  $imageNameToStore;
        }
        if($request->hasFile('audio')){
            $lesson->lesson_audio = $audioNameToStore;
        }
        
        $lesson->save();

        return redirect()->route('admin.lesson.edit',$lesson->id)->with('success','lesson Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        
        $lesson->delete();
        Storage::delete('public/lesson_images/'.$lesson->image, 'public/lesson_audios/'.$lesson->lesson_audio);
        return redirect()->route('admin.lesson.index')->with('success','Lesson removed successfully');
    }
}
