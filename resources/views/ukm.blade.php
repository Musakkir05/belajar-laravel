@extends('layout.mainLayout')

@section('title','UKM')

@section('content')
    <section class="m-5 mt-0">
        <h3>Daftar Mahasiswa Ikut Ukm</h3>
    <div class="mb-2">
        <a href="" class="btn btn-info">Tambah Data</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NamaUkm</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($UkmList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama}}</td> 
                <td><a href="/ukm-detail/{{$data->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </section>
@endsection