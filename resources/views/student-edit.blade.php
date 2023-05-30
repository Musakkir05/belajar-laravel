@extends('layout.mainLayout')
@section('title','Student | Edit')
@section('content')

<section class="m-5 mt-0 justify-content-center">
    <h4>Silahkan Isi Form di bawah</h4>
  <form action="/students-update/{{$student->id}}" method="post">
    @csrf
    @method('put')
      <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="name" name="nama" value="{{$student->nama}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Stambuk</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="stambuk" id="stambuk" value="{{$student->stambuk}}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-7">
            <select class="form-select" aria-label="Default select example" name="gender" required >
                <option value="{{$student->gender}}">Laki-Laki</option>
                @if ($student->gender == 'L')
                    <option value="P">Perempuan</option>
                @else
                    <option value="L">Laki-Laki</option>
                @endif
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="class" class="col-sm-2 col-form-label">Kelas</label>
          <div class="col-sm-7">
            <select class="form-select" aria-label="Default select example" name="class_id">
                    <option value="{{$student->class->id}}">{{$student->class->nama}}</option>
                @foreach ($class as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-7"></div>
        <div class="col-sm-3">
         <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </div>
      </div>
  </form>
  </section>
@endsection