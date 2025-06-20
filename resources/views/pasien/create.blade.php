@extends('layouts.app')

@section('title', 'Tambah pasien')

@section('content')
<form action="{{ route('pasien.store') }}" method="POST">
    @csrf

    <div class="mb-2">
        <label>Nama Pasien</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required>
    </div>

    <div class="mb-2">
    <label>Jenis Kelamin</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L" required>
        <label class="form-check-label" for="laki">Laki-laki</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
        <label class="form-check-label" for="perempuan">Perempuan</label>
    </div>
</div>



    <button class="btn btn-success">Simpan</button>
</form>
@endsection
