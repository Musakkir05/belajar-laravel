@extends('layout.mainLayout')

@section('title','Student')

@section('content')
    <section class="m-5 mt-0">
        <h1>ini adalah halaman Student</h1>
    <div class="mb-2">
        <a href="students-add" class="btn btn-info">Tambah Data</a>
    </div>
    @if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
      </div>
    @endif
    <h3>Daftar Mahasiswa</h3>
    <div class="my-3 col-12 col-sm-7 col-md-5 ">
        <form action="" method="GET">
            <div class="input-group mb-3 ">
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="keyword" placeholder="keyword">
                <button class="btn btn-info">Search</button>
              </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>stambuk</th>
                <th>gender</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->stambuk}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->class->nama}}</td>
                    <td>
                        @if (Auth::user()->role_id != 1 and Auth::user()->role_id != 2)
                            -
                        @else
                        <a href="/student/{{$data->id}}" class="btn btn-primary">Detail</a>
                        <a href="/student-edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
                        @endif
                        @if (Auth::user()->role_id != 1)
                            -  
                        @else
                        <a href="/student-delete/{{$data->id}}" class="btn btn-danger">Hapus</a>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {!! $studentList->withQueryString()->links() !!}
        </ul>
      </nav>

        
    </section>
    
@endsection