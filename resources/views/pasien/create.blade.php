@extends('layouts.main')

@section('title', 'Tambah Pasien')

@section('content')

<style>
    form {
        max-width: 500px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-submit {
        background-color: #2ecc71;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-submit:hover {
        background-color: #27ae60;
    }
</style>

<h2>Tambah Data Pasien</h2>

<form action="/pasien" method="POST">
    @csrf

    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" required>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" required>

    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <button type="submit" class="btn-submit">Simpan</button>
</form>

@endsection
