@extends('layout/main')

@section('title', 'Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h1 class="mt-3">Ubah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" value="{{ $student->nrp }}">
                    @error('nrp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="{{ $student->email }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="{{ $student->jurusan }}">
                </div>
                <button class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection