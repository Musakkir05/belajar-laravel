@extends('layout.mainLayout')

@section('title','Class')

@section('content')
   <section class="m-5 mt-0">
    <h1>ini adalah halaman Class</h1>
    <div class="mb-2">
        <a href="" class="btn btn-info">Tambah Data</a>
    </div>
    <h3>Daftar Mata Kuliah</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Mata Kuliah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
            <tr>
                <td>{{$loop->iteration}}.</td>
                <td>{{$data->namaMataKuliah}}</td>
                <td><a href="/classroom-detail/{{$data->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
   </section>
@endsection