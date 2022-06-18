<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Greeting;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['greetings'] = Greeting::orderBy('id','asc')->get();
        return view('admin.greeting.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['topics'] = Topic::all();
        return view('admin.greeting.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Greeting $greeting, Request $request)
    {
       
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

        $greeting->question = $request->question;
        $greeting->level_id = $request->level_id;
        $greeting->topic_id = $request->topic_id;
        $greeting->option = $request->option;
        $greeting->main_word = $request->main_word;
        $greeting->trans_eng = $request->trans_eng;
        $greeting->trans_ar = $request->trans_ar;
        if($request->hasFile('image')){
            
            $greeting->image =  $imageNameToStore;
        }
        if($request->hasFile('audio')){
            $greeting->audio = $audioNameToStore;
        }
        $greeting->save();
        return redirect()->route('admin.greeting_response.create')->with('success','Add Greeting Response');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function show(Greeting $greeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Greeting $greeting)
    {
        $arr['greeting'] = $greeting;
        $arr['topics'] = Topic::all();
       return view('admin.greeting.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Greeting $greeting)
    {
        $this->validate($request,[
          
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

    $greeting->question = $request->question;
    $greeting->option = $request->option;
    $greeting->main_word = $request->main_word;
    $greeting->trans_eng = $request->trans_eng;
    $greeting->trans_ar = $request->trans_ar;
    $greeting->level_id = $request->level_id;
    $greeting->topic_id = $request->topic_id;
    if($request->hasFile('image')){
            
        $greeting->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $greeting->audio = $audioNameToStore;
    }
    
    $greeting->save();
    return redirect()->route('admin.greeting.edit',$greeting->id)->with('greeting','Greeting Updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $greeting = Greeting::find($id);
        
        $greeting->delete();
        Storage::delete('public/lesson_images/'.$greeting->image, 'public/lesson_audios/'.$greeting->lesson_audio);
        return redirect()->route('admin.greeting.index')->with('success','Removed successfully');
    }
}
