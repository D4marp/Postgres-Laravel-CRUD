<!-- resources/views/mahasiswa/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Data Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="nim">NRP:</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
