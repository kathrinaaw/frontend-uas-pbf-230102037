@extends('layouts.main')

@section('title', 'Data Pasien')

@section('content')

<style>
    h2 {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
    }

    .btn {
        padding: 5px 10px;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
        text-decoration: none;
    }

    .btn-edit {
        background-color: #3498db;
    }

    .btn-delete {
        background-color: #e74c3c;
    }

    .btn-create {
        background-color: #2ecc71;
        color: white;
        padding: 8px 12px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 10px;
        border-radius: 4px;
    }

    form {
        margin: 0;
    }
</style>

<h2>Data Pasien</h2>

<a href="/pasien/create" class="btn-create">+ Tambah Pasien</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pasien as $m)
            <tr>
                <td>{{ $m['id'] ?? '-' }}</td>
                <td>{{ $m['nama'] ?? '-' }}</td>
                <td>{{ $m['alamat'] ?? '-' }}</td>
                <td>{{ $m['tanggal_lahir'] ?? '-' }}</td>
                <td>{{ $m['jenis_kelamin'] ?? '-' }}</td>
                <td>
                    <div class="action-buttons">
                        <a href="/pasien/{{ $m['id'] ?? '0' }}/edit" class="btn btn-edit">Edit</a>
                        <form action="/pasien/{{ $m['id'] ?? '0' }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="text-align: center;">Data pasien belum tersedia.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
