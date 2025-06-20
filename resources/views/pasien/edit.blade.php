@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('content')


    <form action="{{ route('pasien.update', $pasien['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $pasien['nama'] }}" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pasien['alamat'] }}" required>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien['tanggal_lahir'] }}" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $pasien['jenis_kelamin'] }}" required>
            <small class="form-text text-muted">Gunakan "L" untuk Laki-laki, "P" untuk Perempuan</small>
        </div>

        <button type="submit" class="btn btn-success mt-2">Update</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
@endsection
