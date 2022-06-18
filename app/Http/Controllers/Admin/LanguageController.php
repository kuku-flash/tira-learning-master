<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['languages'] = language::all();
        return view('admin.language.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, language $language)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $language->name = $request->name;
        $language->save();

        return redirect() -> route('admin.language.index')->with('success','New language Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(language $language)
    {
        $arr['language'] = $language;
        return view('admin.language.edit')->with($arr);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, language $language)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $language->name = $request->name;
        $language->save();
        return redirect() -> route('admin.language.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        language::destroy($id);
        return redirect() -> route('admin.language.index')->with('success','Deleted Successfully');
    }
}
