<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Greeting;
use App\Models\Greeting_response;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GreetingResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['greeting_responses'] = Greeting_response::orderBy('id','desc')->get();
        return view('admin.greeting_response.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['greetings'] = Greeting::all();
        return view('admin.greeting_response.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Greeting_response $greeting_response, Request $request)
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

    $greeting_response->response = $request->response;
    $greeting_response->option = $request->option;
    $greeting_response->trans_eng = $request->trans_eng;
    $greeting_response->trans_ar = $request->trans_ar;
    $greeting_response->greetings_id =  $request->greetings_id;
    if($request->hasFile('image')){
            
        $greeting_response->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $greeting_response->audio = $audioNameToStore;
    }
    $greeting_response->save();
    return redirect()->route('admin.greeting_response.index')->with('success','New greeting added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Greeting_response  $greeting_response
     * @return \Illuminate\Http\Response
     */
    public function show(Greeting_response $greeting_response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Greeting_response  $greeting_response
     * @return \Illuminate\Http\Response
     */
    public function edit(Greeting_response $greeting_response, Greeting $greeting)
    {
        $arr['greeting_response'] = $greeting_response;
        $arr['greeting'] = $greeting;
        $arr['greetings'] = Greeting::all();
        $arr['topics'] = Topic::all();
 
        return view('admin.greeting_response.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Greeting_response  $greeting_response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Greeting_response $greeting_response)
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

    $greeting_response->response = $request->response;
    $greeting_response->option = $request->option;
    $greeting_response->trans_eng = $request->trans_eng;
    $greeting_response->trans_ar = $request->trans_ar;
    if($request->hasFile('image')){
            
        $greeting_response->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $greeting_response->audio = $audioNameToStore;
    }
    $greeting_response->save();
    return redirect()->route('admin.greeting_response.edit',$greeting_response->id)->with('greeting_response','greeting response updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Greeting_response  $greeting_response
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Greeting_response::find($id);
        
        $lesson->delete();
        Storage::delete('public/lesson_images/'.$lesson->image, 'public/lesson_audios/'.$lesson->audio);
        return redirect()->route('admin.greeting_response.index')->with('success','greeting_response removed successfully');
    }
}
