<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Alphabet;
use App\Models\language;

class AlphabetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['alphabets'] = Alphabet::orderBy('letter_id','ASC')->get();
        return view('admin.alphabet.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['languages'] = Language::all();
        return view('admin.alphabet.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alphabet $alphabet)
    {
        $this->validate($request,[
            'small_letter' => 'required|max:2',
            'capital_letter' => 'required|max:2',
            'illustration_text' => 'required',
            'illustration_text_trans_eng' => '',
            'illustration_text_trans_ar' => '',
            'illustration_image' => 'image|nullable|max:1999',
            'illustration_audio' => 'mimes:mp3,wav|nullable|max:5000',
            'letter_audio' => 'mimes:mp3,wav|nullable|max:5000',
        ]);
            //Handle File Upload
            if($request->hasFile('illustration_image')){
                // Get filename with the extension
                $imagenamewithExt = $request->file('illustration_image')->getClientOriginalName();
                //Get just filename
                $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('illustration_image')->getClientOriginalExtension();
                // FileName to Store
                $imageIllustrationToStore = $imagename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('illustration_image')->storeAs('public/lesson_images', $imageIllustrationToStore);
            } else{
                $imageIllustrationToStore = '';
            }
            

            if($request->hasFile('letter_audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('letter_audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('letter_audio')->getClientOriginalExtension();
                // FileName to Store
                $audioLetterToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('letter_audio')->storeAs('public/lesson_audios', $audioLetterToStore);
            } else{
                $audioLetterToStore = '';
            }

            if($request->hasFile('illustration_audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('illustration_audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('illustration_audio')->getClientOriginalExtension();
                // FileName to Store
                $audioIllustrationToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('illustration_audio')->storeAs('public/lesson_audios', $audioIllustrationToStore);
            } else{
                $audioIllustrationToStore = '';
            }

           
            $alphabet->small_letter = $request->small_letter;
            $alphabet->capital_letter = $request->capital_letter;
            $alphabet->illustration_text = $request->illustration_text;
            $alphabet->illustration_text_trans_ar = $request->illustration_text_trans_ar;
            $alphabet->illustration_text_trans_eng = $request->illustration_text_trans_eng;
            $alphabet->illustration_image =  $imageIllustrationToStore;
            $alphabet->illustration_audio = $audioIllustrationToStore;
            $alphabet->letter_audio = $audioLetterToStore;
            $alphabet->language_id = $request->language_id;
   
            $alphabet->save();
        return redirect()->route('admin.alphabet.index')->with('success','New Letter added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alphabet $alphabet)
    {
        $arr['alphabet'] = $alphabet;
        $arr['languages'] = Language::All();
        return view('admin.alphabet.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alphabet $alphabet)
    {
        $this->validate($request,[
            'small_letter' => 'required|max:2',
            'capital_letter' => 'required|max:2',
            'illustration_text' => 'required',
            'illustration_text_trans_eng' => '',
            'illustration_text_trans_ar' => '',
            'illustration_image' => 'image|nullable|max:1999',
            'illustration_audio' => 'mimes:mp3,wav|nullable|max:5000',
            'letter_audio' => 'mimes:mp3,wav|nullable|max:5000',
        ]);
            //Handle File Upload
            if($request->hasFile('illustration_image')){
                // Get filename with the extension
                $imagenamewithExt = $request->file('illustration_image')->getClientOriginalName();
                //Get just filename
                $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('illustration_image')->getClientOriginalExtension();
                // FileName to Store
                $imageIllustrationToStore = $imagename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('illustration_image')->storeAs('public/lesson_images', $imageIllustrationToStore);
            } 
            

            if($request->hasFile('letter_audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('letter_audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('letter_audio')->getClientOriginalExtension();
                // FileName to Store
                $audioLetterToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('letter_audio')->storeAs('public/lesson_audios', $audioLetterToStore);
            } 

            if($request->hasFile('illustration_audio')){
                // Get filename with the extension
                $audionamewithExt = $request->file('illustration_audio')->getClientOriginalName();
                //Get just filename
                $audioname = pathinfo($audionamewithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('illustration_audio')->getClientOriginalExtension();
                // FileName to Store
                $audioIllustrationToStore = $audioname.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('illustration_audio')->storeAs('public/lesson_audios', $audioIllustrationToStore);
            } 

           
            $alphabet->small_letter = $request->small_letter;
            $alphabet->capital_letter = $request->capital_letter;
            $alphabet->illustration_text = $request->illustration_text;
            $alphabet->illustration_text_trans_ar = $request->illustration_text_trans_ar;
            $alphabet->illustration_text_trans_eng = $request->illustration_text_trans_eng;
            $alphabet->language_id = $request->language_id;
            if($request->hasFile('illustration_image')){
            
                $alphabet->illustration_image =  $imageIllustrationToStore;
            }
            if($request->hasFile('illustration_audio')){
            
                $alphabet->illustration_audio = $audioIllustrationToStore;
            }
            if($request->hasFile('letter_audio')){
            
                $alphabet->letter_audio = $audioLetterToStore;
            }
            $alphabet->save();
        return redirect()->route('admin.alphabet.index')->with('success','New Letter Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alphabet = Alphabet::find($id);
        
        $alphabet->delete();
        Storage::delete('public/lesson_images/'.$alphabet->illustration_image, 'public/lesson_audios/'.$alphabet->illustration_audio, 'public/lesson_audios/'.$alphabet->letter_audio);
        return redirect()->route('admin.alphabet.index')->with('success','Lesson removed successfully');
    }
}
