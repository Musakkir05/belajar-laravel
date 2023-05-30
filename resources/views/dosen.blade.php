@extends('layout.mainLayout')

@section('title','Dosen')

@section('content')
    <section class="m-5 mt-0">
        <h1>Ini adalah halaman Dosen</h1>
    <div class="mb-2">
        <a href="" class="btn btn-info">Tambah Data</a>
    </div>
    <h3>List nama dosen</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DosenList as $data)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->namaDosen}}</td>
                    <td><a href="/dosen-detail/{{$data->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </section>
@endsection