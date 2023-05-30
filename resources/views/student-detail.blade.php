@extends('layout.mainLayout')

@section('title','Student Detail')

@section('content')
    <section class="m-5">
        <h1>Halaman student detail</h1>
        <h3>Anda melihat data detail Mahasiswa {{$student->nama}}</h3>
        <div class="my-3 d-flex justify-content-center">
          @if ($student->image != '')
            <img src="{{asset('storage/photo/'.$student->image);}}" alt="" width="200px">
          @else
          <img src="{{asset('storage/image/image-default.png');}}" alt="" width="200px">
          @endif
        </div>
        <form class="row g-3">
            <div class="col-md-4">
            <label  class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{$student->nama}}">
          </div>
          <div class="col-md-4">
            <label  class="form-label">Stambuk</label>
            <input type="text" class="form-control" value="{{$student->stambuk}}">
          </div>

        @php
            $find=['P','L'];
            $replacement=['Perempuan','Laki-Laki'];
            $string=$student->gender;
            $jenis_kelamin = Str::replace($find, $replacement, $string);
        @endphp
          <div class="col-md-4">
            <label  class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" value="{{$jenis_kelamin}}">
          </div>
          <div class="col-md-4">
            <label  class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" value="{{$student->class->namaMataKuliah}}">
          </div>
          <div class="col-md-4">
            <label  class="form-label">Dosen</label>
            <input type="text" class="form-control" value="{{$student->class->dosen->namaDosen}}">
          </div>

        </form>
        <h4 class="mt-2">UKM yang di ikuti</h4>
        @foreach ($student->ukm as $data)
            <li>{{$data->nama}}</li>
        @endforeach
    </section>
@endsection