<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['numbers'] = Number::all();
        return view('admin.number.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.number.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Number $number)
    {
            $this->validate($request,[
                'number_written' => 'required',
                'number_topic' => 'required',
                'option' => 'required',
                'number' => 'required',
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

        $number->option = $request->option;
        $number->number = $request->number;
        $number->number_written = $request->number_written;
        $number->number_topic = $request->number_topic;
        $number->trans_eng = $request->trans_eng;
        $number->trans_ar = $request->trans_ar;
        if($request->hasFile('image')){
                
            $number->image =  $imageNameToStore;
        }
        if($request->hasFile('audio')){
            $number->audio = $audioNameToStore;
        }
        

        $number->save();
        return redirect()->route('admin.number.index')->with('number','Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show(Number $number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function edit(Number $number)
    {
        $arr['number'] = $number;
       return view('admin.number.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Number $number)
    {
        $this->validate($request,[
            'number_written' => 'required',
            'number_topic' => 'required',
            'option' => 'required',
            'number' => 'required',
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

    $number->option = $request->option;
    $number->number = $request->number;
    $number->number_written = $request->number_written;
    $number->number_topic = $request->number_topic;
    $number->trans_eng = $request->trans_eng;
    $number->trans_ar = $request->trans_ar;
    if($request->hasFile('image')){
            
        $number->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $number->audio = $audioNameToStore;
    }
    

    $number->save();
    return redirect()->route('admin.number.edit')->with('number','Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number = Number::find($id);
        
        $number->delete();
        Storage::delete('public/lesson_images/'.$number->image, 'public/lesson_audios/'.$number->audio);
        return redirect()->route('admin.number.index')->with('success',' removed successfully');
    }
}
