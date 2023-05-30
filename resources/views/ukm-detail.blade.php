@extends('layout.mainLayout')

@section('title','Ukm Detail')

@section('content')
<h2>Ini adalah halaman detail UKM {{$ukmDetail->nama}}</h2>
<h5>List Mahasiswa ikut UKM</h5>
@foreach ($ukmDetail->students as $data)
    <li>{{$data->nama}}</li>
@endforeach
@endsection