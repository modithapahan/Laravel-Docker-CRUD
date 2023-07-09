<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-students');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name'=> 'required|string',
            'm_name'=> 'sometimes|string',
            'l_name'=> 'required|string',
            'dob'=> 'required|string',
            'age'=> 'required|integer',
            'location'=> 'required|string'
        ]);

        if($validator->fails()) {
            return redirect()->back();
        } else {
            Student::create([
                'f_name'=> $request->f_name,
                'm_name'=> $request->m_name,
                'l_name'=> $request->l_name,
                'dob'=> $request->dob,
                'age'=> $request->age,
                'location'=> $request->location
            ]);

            return redirect(route('student.home'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('edit-students', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'f_name'=> 'required|string',
            'm_name'=> 'sometimes|string',
            'l_name'=> 'required|string',
            'dob'=> 'required|string',
            'age'=> 'required|integer',
            'location'=> 'required|string'
        ]);

        if($validator->fails()) {
            return redirect()->back();
        } else {
            $student = Student::findOrFail($id);
            if($student) {
                $student->update([
                    'f_name'=> $request->f_name,
                    'm_name'=> $request->m_name,
                    'l_name'=> $request->l_name,
                    'dob'=> $request->dob,
                    'age'=> $request->age,
                    'location'=> $request->location
                ]);
                return redirect(route('student.home'));
            } else {
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->back();
    }
}
