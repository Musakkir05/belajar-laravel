<?php

namespace App\Http\Controllers;


use App\Models\ClassRoom;


class classroomController extends Controller
{
    public function index()
    {
        $classroom = ClassRoom::get();

        return view('classroom', ['classList' => $classroom]);
    }

    public function show($id)
    {
        $classroom = ClassRoom::with(['students', 'dosen'])->findOrFail($id);
        return view('classroom-detail', ['classList' => $classroom]);
    }
}
