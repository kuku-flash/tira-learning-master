<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['days'] = Day::orderBy('id','asc')->get();
        return view('admin.day.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Day $day)
    {
        $this->validate($request,[
            'day_id' => 'required',
            'option' => 'required',
            'day' => 'required',
            'trans_eng' => 'required',
            'trans_ar' => 'required',
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

    $day->option = $request->option;
    $day->day = $request->day;
    $day->day_id = $request->day_id;
    $day->trans_eng = $request->trans_eng;
    $day->trans_ar = $request->trans_ar;
    if($request->hasFile('image')){
            
        $day->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $day->audio = $audioNameToStore;
    }
    

    $day->save();
    return redirect()->route('admin.day.index')->with('day','Addes successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        $arr['day'] = $day;
       return view('admin.day.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        $this->validate($request,[
          
            'day_id' => 'required',
            'option' => 'required',
            'day' => 'required',
            'trans_eng' => 'required',
            'trans_ar' => 'required',
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
        $day->option = $request->option;
        $day->day = $request->day;
        $day->day_id = $request->day_id;
        $day->trans_eng = $request->trans_eng;
        $day->trans_ar = $request->trans_ar;
        $day->image =  $imageNameToStore;
        $day->audio = $audioNameToStore;
        $day->save();
        return redirect()->route('admin.day.edit',$day->id)->with('day','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $day = Day::find($id);
        
        $day->delete();
        Storage::delete('public/lesson_images/'.$day->image, 'public/lesson_audios/'.$day->audio);
        return redirect()->route('admin.day.index')->with('success',' removed successfully');
    }
}
