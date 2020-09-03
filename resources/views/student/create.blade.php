@extends('layout/main')

@section('title', 'Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" value="{{ old('nrp') }}">
                    @error('nrp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="{{ old('jurusan') }}">
                </div>
                <button class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection