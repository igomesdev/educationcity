<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function show()
    {
        $students = Student::orderBy('name', 'desc')->get();

        return view('students.overview', [
            'students' => $students,
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'english' => '',
            'science' => '',
            'math' => ''
        ]);

        auth()->user()->students()->create([
            'name' => $data['name'],
            'english' => $data['english'],
            'science' => $data['science'],
            'math' => $data['math'],
            'average' => ($data['english'] + $data['science'] + $data['math']) / 3
        ]);

        return redirect('/home');
    }
}
