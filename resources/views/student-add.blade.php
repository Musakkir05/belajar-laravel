@extends('layout.mainLayout')

@section('title','Add New Student')

@section('content')

    <section class="m-5 mt-0 justify-content-center">
      <h4>Silahkan Isi Form di bawah</h4>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="students" method="post" enctype="multipart/form-data">
      @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control"name="nama" id="name"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Stambuk</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="stambuk" id="stambuk">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-7">
              <select class="form-select" aria-label="Default select example" name="gender" required>
                <option value="">Pilih</option>
                <option value="P">Perempuan</option>
                <option value="L">Laki-Laki</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="class" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-7">
              <select class="form-select" aria-label="Default select example" name="class_id">
                <option value="">Pilih</option>
                @foreach ($class as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-7">
              <div class="input-group mb-3">
                <input type="file" class="form-control"  name="photo" id="photo">
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-7"></div>
          <div class="col-sm-3">
           <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    </form>
    </section>
@endsection