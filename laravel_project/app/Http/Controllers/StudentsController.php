<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        return Student::create($request->all());
    }

    public function show(string $id)
    {
        return Student::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return $student;
    }

    public function destroy(string $id)
    {
        Student::destroy($id);
        return response()->noContent();
    }
}