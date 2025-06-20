@extends('layouts.app')

@section('title', 'Data pasien')

@section('content')
<a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah pasien</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasien as $p)
        <tr>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['alamat'] }}</td>
            <td>{{ $p['tanggal_lahir'] }}</td>
            <td>{{ $p['jenis_kelamin'] }}</td>
            <td>
                <a href="{{ route('pasien.edit', $p['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pasien.destroy', $p['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
