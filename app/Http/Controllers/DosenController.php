<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen', ['DosenList' => $dosen]);
    }
    public function show($id)
    {
        $dosen = Dosen::with('classroom.students')->findOrFail($id);
        return view('dosen-detail', ['dosenList' => $dosen]);
    }
}
