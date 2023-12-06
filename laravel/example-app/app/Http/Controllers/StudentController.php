<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(25);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $form_data = $request->validated();

        if($request->hasfile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            $form_data['image'] = $fileName;
        }
        

        Student::create($form_data);
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $form_data = $request->validated();

        if($request->hasfile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            $form_data['image'] = $fileName;
        }

        Student::whereId($student->id)->update($form_data);
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::whereid($student->id)->delete();
        return back();
    }
}
