@extends('layouts.app')

@section('content')
    <h3>Edit Data obat</h3>

    <form action="{{ route('obat.update', $obat['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $obat['nama_obat'] }}" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $obat['kategori'] }}" required>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="{{ $obat['stok'] }}" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $obat['harga'] }}" required>
        </div>

        <button type="submit" class="btn btn-success mt-2">Update</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
@endsection
