@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Verifikasi Jemaat</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('umkm.authenticateJemaat') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jemaat2</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" required>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="no_telp" required>
        </div>
        <button type="submit" class="btn btn-primary">Verifikasi</button>
    </form>
</div>
@endsection
