@extends('layouts.app')

@section('content')
    <h3>Tambah Data obat</h3>

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
@endsection
