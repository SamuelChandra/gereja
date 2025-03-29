@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar UMKM</h1>

    <!-- Tombol Tambah UMKM -->
    <a href="{{ route('umkm.create') }}" class="btn btn-primary mb-3">Tambah UMKM</a>

    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel UMKM -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama UMKM</th>
                    <th>Gambar</th>
                    <th>Lokasi</th>
                    <th>Deskripsi</th>
                    <th>Pemilik</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($umkm as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_umkm }}</td>
                        <td>
                            @if ($item->gambar_umkm)
                                <img src="{{ asset('storage/' . $item->gambar_umkm) }}" alt="Gambar UMKM" width="80">
                            @else
                                <span class="text-muted">Tidak Ada Gambar</span>
                            @endif
                        </td>
                        <td>{{ $item->lokasi_umkm }}</td>
                        <td>{{ Str::limit($item->deskripsi_umkm, 50) }}</td>
                        <td>{{ $item->pemilik->name ?? 'Tidak Diketahui' }}</td>
                        <td>
                            <a href="{{ route('umkm.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('umkm.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus UMKM ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada UMKM yang terdaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
