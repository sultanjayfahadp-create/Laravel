<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getAllStudents()
    {
        $students = Students::all();
        return response()->json([
        'message' => 'All Students from Database',
        'count' => $students->count(),
        'data' => $students
        ]);
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