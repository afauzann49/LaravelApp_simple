@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                    <form action="/students/{{$student->id}}/edit" method="get">
                        @csrf
                        <button href="#" class="card-link btn btn-sm btn-primary d-inline">Edit</button>
                    </form>
                    <form action="/students/{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button href="#" class="card-link btn btn-sm btn-danger" onclick="return confirm('Yakin ?')">Hapus</button>
                    </form>
                    <a href="/students" class="card-link btn btn-sm btn-success">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection