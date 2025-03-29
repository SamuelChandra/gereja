@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Pendaftaran UMKM</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama UMKM -->
        <div class="mb-3">
            <label for="nama_umkm" class="form-label">Nama UMKM</label>
            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" 
                   name="nama_umkm" value="{{ old('nama_umkm') }}" required>
            @error('nama_umkm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gambar UMKM -->
        <div class="mb-3">
            <label for="gambar_umkm" class="form-label">Gambar UMKM</label>
            <input type="file" class="form-control @error('gambar_umkm') is-invalid @enderror" 
                   name="gambar_umkm" accept="image/*">
            @error('gambar_umkm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Lokasi UMKM -->
        <div class="mb-3">
            <label for="lokasi_umkm" class="form-label">Lokasi UMKM</label>
            <input type="text" class="form-control @error('lokasi_umkm') is-invalid @enderror" 
                   name="lokasi_umkm" value="{{ old('lokasi_umkm') }}" required>
            @error('lokasi_umkm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi UMKM -->
        <div class="mb-3">
            <label for="deskripsi_umkm" class="form-label">Deskripsi UMKM</label>
            <textarea class="form-control @error('deskripsi_umkm') is-invalid @enderror" 
                      name="deskripsi_umkm" rows="4" required>{{ old('deskripsi_umkm') }}</textarea>
            @error('deskripsi_umkm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- ID Jemaat (Hidden) -->
        <input type="hidden" name="jemaat_id" value="{{ session('verified_jemaat_id') }}">

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('umkm.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
