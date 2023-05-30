<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

use App\Http\Requests\StudentCreateRequest;


class studentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $student = Student::with('class')
            ->where('nama', 'LIKE', '%' . $keyword . '%')
            ->orWhere('gender', $keyword)
            ->orWhere('stambuk', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('nama', 'like', '%' . $keyword . '%');
            })
            ->paginate(10);

        return view('student', ['studentList' => $student]);
    }
    public function show($id)
    {

        $student = Student::with(['class.dosen', 'ukm'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }
    public function create()
    {
        $class = ClassRoom::select('id', 'nama')->get();

        return view('student-add', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request)
    {
        $newName = '';
        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $student = Student::create($request->all());

        if ($student) {
            session()->flash('status', 'success');
            session()->flash('message', 'Data berhasil di tambahkan');
        }

        return redirect('/students');
    }
    public function edit($id)
    {

        $student = Student::with('class')->findOrFail($id);

        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['nama', 'id']);

        return view('student-edit', ['student' => $student, 'class' => $class]);
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // $student->nama = $request->nama;
        // $student->stambuk = $request->stambuk;
        // $student->gender = $request->gender;
        // $student->class_id = $request->class_id;

        // $student->save();
        $student->update($request->all());

        return redirect('/students');
    }
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        if ($student) {
            session()->flash('status', 'success');
            session()->flash('message', 'Data berhasil dihapus');
        }
        return redirect('/students');
    }
}
