@extends('layout.mainLayout')

@section('title','Class Detail')

@section('content')
    <section class="p-3">

        <h2>Ini adalah halaman detail kelas {{$classList->nama}}</h2>
        <h4>Nama dosen : {{$classList->dosen->namaDosen}}</h4>
        <h6>Nama Nama Mahasiswa dalam kelas ini : </h6>
        @foreach ($classList->students as $data)
            <li>{{$data->nama}}</li>
        @endforeach
    </section>
@endsection