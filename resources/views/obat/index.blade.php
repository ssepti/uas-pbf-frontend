@extends('layouts.app')

@section('content')
    <h3>Data obat</h3>
    <a href="{{ route('obat.create') }}" class="btn btn-primary mb-2">Tambah obat</a>

    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $b)
                <tr>
                    <td>{{ $b['nama_obat'] }}</td>
                    <td>{{ $b['kategori'] }}</td>
                    <td>{{ $b['stok'] }}</td>
                    <td>{{ $b['harga'] }}</td>
                    <td>
                        <a href="{{ route('obat.edit', $b['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('obat.destroy', $b['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data obat ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
