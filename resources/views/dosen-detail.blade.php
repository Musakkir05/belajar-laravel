@extends('layout.mainLayout')

@section('title','Dosen Detail')

@section('content')
    <h3>Ini adalah halaman detail dosen {{$dosenList->namaDosen}} mengajar di kelas {{$dosenList->classroom->nama}}</h3>
    <h5>Nama Mahasiswa yang mengikuti kelas ini: </h5>
    @foreach ($dosenList->classroom['students'] as $data)
        <li>{{$data->nama}}</li>        
    @endforeach
@endsection