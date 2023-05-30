<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index()
    {
        $ukm = Ukm::all();

        return view('Ukm', ['UkmList' => $ukm]);
    }
    public function show($id)
    {
        $ukm = Ukm::with('Students')->findOrFail($id);
        return view('ukm-detail', ['ukmDetail' => $ukm]);
    }
}
