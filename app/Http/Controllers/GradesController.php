<?php

namespace App\Http\Controllers;

use App\student;
use App\grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = grade::all();
        $students = student::all();

        return view('grades.create', [
            'grades' => $grades,
            'students' => $students
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'test_id' => '',
            'student_id' => '',
            'english' => '',
            'math' => '',
            'science' => ''
        ]);

        $stGrade = new grade;
        $stGrade->test_id = $data['test_id'];
        $stGrade->student_id = $data['student_id'];
        $stGrade->english = $data['english'];
        $stGrade->math = $data['math'];
        $stGrade->science = $data['science'];
        $stGrade->save();

        return redirect('/grade/testoverview');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $grades = grade::all();
        $students = student::all();

        return view('grades.testoverview', [
            'grades' => $grades,
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade $grade)
    {
        //
    }
}
