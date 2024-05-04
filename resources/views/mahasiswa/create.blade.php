<!-- resources/views/mahasiswa/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Tambah Mahasiswa Baru</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nim">NRP:</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
