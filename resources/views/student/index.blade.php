@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a class="btn btn-sm btn-primary my-2" href="/students/create">Tambah Data</a>

            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a class="badge badge-primary badge-pill" href="/students/{{$student->id}}">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection