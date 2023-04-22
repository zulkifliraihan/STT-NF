<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return response()->json([
            'success' => true,
            'message' => 'Get all students',
            'data' => $students
        ], 200);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'numeric|required',
            'email' => 'email|required',
            'jurusan' => 'required'
        ]);

        $student = Student::create($validatedData);

        $data = [
            'success' => true,
            'message' => 'Student is created succesfully',
            'data' => $student
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ]);

        $data = [
            'success' => true,
            'message' => 'Student is updated succesfully',
            'data' => $student
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $student = Student::find($id)->delete();

        $data = [
            'success' => true,
            'message' => 'Student is deleted succesfully',
            'data' => $student
        ];

        return response()->json($data, 200);
    }
}
