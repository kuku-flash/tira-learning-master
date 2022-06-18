<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Month;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['months'] = Month::all();
        return view('admin.month.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.month.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Month $month)
    {
            $this->validate($request,[
                'month_id' => 'required',
                'month_length' => 'required',
                'option' => 'required',
                'month' => 'required',
                'trans_eng' => 'required',
              
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

        $month->option = $request->option;
        $month->month = $request->month;
        $month->month_id = $request->month_id;
        $month->month_lenght = $request->month_id;
        $month->trans_eng = $request->trans_eng;
        $month->trans_ar = $request->trans_ar;
        if($request->hasFile('image')){
                
            $month->image =  $imageNameToStore;
        }
        if($request->hasFile('audio')){
            $month->audio = $audioNameToStore;
        }
        

        $month->save();
        return redirect()->route('admin.month.index')->with('month','Added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function show(Month $month)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function edit(Month $month)
    {
       $arr['month'] = $month;
       return view('admin.month.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Month $month)
    {
        $this->validate($request,[
            'month_id' => 'required',
            'month_lenght' => 'required',
            'option' => 'required',
            'month' => 'required',
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

    $month->option = $request->option;
    $month->month = $request->month;
    $month->month_id = $request->month_id;
    $month->month_lenght = $request->month_lenght;
    $month->trans_eng = $request->trans_eng;
    $month->trans_ar = $request->trans_ar;
    if($request->hasFile('image')){
            
        $month->image =  $imageNameToStore;
    }
    if($request->hasFile('audio')){
        $month->audio = $audioNameToStore;
    }
    

    $month->save();
    return redirect()->route('admin.month.edit')->with('month','Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $month = Month::find($id);
        
        $month->delete();
        Storage::delete('public/lesson_images/'.$month->image, 'public/lesson_audios/'.$month->audio);
        return redirect()->route('admin.month.index')->with('success',' removed successfully');
    }
}
