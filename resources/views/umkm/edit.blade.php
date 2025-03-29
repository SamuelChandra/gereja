@extends('layout.php')

@section('title', 'Edit UMKM')

@section('content')

<form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nama_umkm" class="form-label">Nama UMKM</label>
        <input type="text" class="form-control" name="nama_umkm" value="{{ old('nama_umkm', $umkm->nama_umkm) }}" required>
    </div>

    <div class="mb-3">
        <label for="gambar_umkm" class="form-label">Gambar UMKM</label>
        <input type="file" class="form-control" name="gambar_umkm" accept="image/*">
        <small>Biarkan kosong jika tidak ingin mengubah gambar.</small>
    </div>

    <div class="mb-3">
        <label for="lokasi_umkm" class="form-label">Lokasi UMKM</label>
        <input type="text" class="form-control" name="lokasi_umkm" value="{{ old('lokasi_umkm', $umkm->lokasi_umkm) }}" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi_umkm" class="form-label">Deskripsi UMKM</label>
        <textarea class="form-control" name="deskripsi_umkm" rows="3" required>{{ old('deskripsi_umkm', $umkm->deskripsi_umkm) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="jemaat_id" class="form-label">Pemilik UMKM</label>
        <select class="form-select" name="jemaat_id" required>
            @foreach($jemaat as $j)
                <option value="{{ $j->id }}" {{ old('jemaat_id', $umkm->jemaat_id) == $j->id ? 'selected' : '' }}>{{ $j->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
</form>

@endsection