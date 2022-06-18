<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Teacher;
use App\Models\language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['teachers'] = Teacher::orderBy('id','asc')->paginate(20);

        return view('admin.teacher.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['languages'] = Language::All();
        return view('admin.teacher.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teacher $teacher)
    {
        $this->validate($request, [
            'teacher_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'language_id' => 'required',
            'specialization' => 'required',

        ]);
        $teacher->name = $request->teacher_name;
        $teacher->email = $request->email;
        $teacher->specialization = $request->specialization;
        $teacher->password = Hash::make($request->password);
        $teacher->language_id = $request->language_id;
        $teacher->save();

        return redirect()->route('admin.teacher.index')->with('sucess','New teacher has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $arr['teacher'] = $teacher;
        return view('admin.teacher.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->validate($request, [
            'teacher_name' => 'required',
            'teacher_type' => 'required',
        ]);
        $teacher->name = $request->teacher_name;
        $teacher->email = $request->email;
        $teacher->type = $request->teacher_type;
        $teacher->save();

        return redirect()->route('admin.teacher.index')->with('sucess','New teacher has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect() -> route('admin.teacher.index')->with('success','Deleted Successfully');
    }
}
