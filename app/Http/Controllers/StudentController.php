<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::latest()->paginate(5);

        return view('students.index', compact('students'))
        ->with('i', (request()->input('page', 1) -1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'total' => 'required',
            'bloodtype' => 'nullable',
        ]);

        Student::create($request->all());
        
        return redirect()->route('students.index')
        ->with('success', 'Berhasil Menyimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::where('id', $id)->first();
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'total' => 'required',
            'bloodtype' => 'nullable',
        ]);

        Student::findOrfail($id)->update($request->all());

        return redirect()->route('students.index')
        ->with('success', 'Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Student::where('id', '=', $id) ->delete();

        return redirect()->route('students.index')
        ->with('success', 'Berhasil Hapus !');
    }
}
