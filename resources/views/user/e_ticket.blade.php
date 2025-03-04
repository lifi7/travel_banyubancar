@extends('layouts.app') {{-- Jika ada layout utama --}}
@section('content')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-center">E-Ticket Travel</h3>
        <hr>
        <p><strong>Kode Booking:</strong> {{ $kode }}</p>
        <p><strong>Nama Pengirim:</strong> {{ $nama_pengirim }}</p>
        <p><strong>Nama Penerima:</strong> {{ $nama_penerima }}</p>
        <p><strong>Alamat Pengirim:</strong> {{ $alamat_pengirim }}</p>
        <p><strong>Alamat Penerima:</strong> {{ $alamat_penerima }}</p>
        <p><strong>Tanggal:</strong> {{ $tanggal }}</p>
        <p><strong>Waktu:</strong> {{ $waktu }}</p>
        <button class="btn btn-primary w-100" onclick="window.print()">Cetak Tiket</button>
    </div>
</div>
@endsection
