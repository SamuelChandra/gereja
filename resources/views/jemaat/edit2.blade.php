@extends('layout.app')

@section('title', 'Edit Jemaat')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Jemaat</h1>

    <a href="{{ route('jemaat.index') }}" class="btn btn-secondary">⬅ Kembali</a>

    {{-- ✅ Success message after update --}}
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    {{-- ✅ Fix: Correct form action for update --}}
    <form action="{{ route('jemaat.update', $jemaat->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $jemaat->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="gender">
                        <option value="Laki-laki" {{ old('gender', $jemaat->gender) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('gender', $jemaat->gender) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="blood_group" class="form-label">Golongan Darah</label>
                    <input type="text" class="form-control" name="blood_group" value="{{ old('blood_group', $jemaat->blood_group) }}">
                </div>

                <div class="mb-3">
                    <label for="education" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" name="education" value="{{ old('education', $jemaat->education) }}">
                </div>

                <div class="mb-3">
                    <label for="work" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="work" value="{{ old('work', $jemaat->work) }}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control" name="address" required>{{ old('address', $jemaat->address) }}</textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone_number" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $jemaat->phone_number) }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $jemaat->email) }}">
                </div>

                <div class="mb-3">
                    <label for="status_jemaat" class="form-label">Status Jemaat</label>
                    <select class="form-select" name="status_jemaat">
                        <option value="Aktif" {{ old('status_jemaat', $jemaat->status_jemaat) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Tidak Aktif" {{ old('status_jemaat', $jemaat->status_jemaat) == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status_baptis" class="form-label">Status Baptis</label>
                    <select class="form-select" name="status_baptis">
                        <option value="1" {{ old('status_baptis', $jemaat->status_baptis) == '1' ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ old('status_baptis', $jemaat->status_baptis) == '0' ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal_baptis" class="form-label">Tanggal Baptis</label>
                    <input type="date" class="form-control" name="tanggal_baptis" value="{{ old('tanggal_baptis', $jemaat->tanggal_baptis) }}">
                </div>

                <div class="mb-3">
                    <label for="status_sidi" class="form-label">Status Sidi</label>
                    <select class="form-select" name="status_sidi">
                        <option value="1" {{ old('status_sidi', $jemaat->status_sidi) == '1' ? 'selected' : '' }}>Sudah</option>
                        <option value="0" {{ old('status_sidi', $jemaat->status_sidi) == '0' ? 'selected' : '' }}>Belum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal_sidi" class="form-label">Tanggal Sidi</label>
                    <input type="date" class="form-control" name="tanggal_sidi" value="{{ old('tanggal_sidi', $jemaat->tanggal_sidi) }}">
                </div>

                <div class="mb-3">
                    <label for="status_nikah" class="form-label">Status Nikah</label>
                    <select class="form-select" name="status_nikah">
                        <option value="1" {{ old('status_nikah', $jemaat->status_nikah) == '1' ? 'selected' : '' }}>Sudah</option>
                        <option value="0" {{ old('status_nikah', $jemaat->status_nikah) == '0' ? 'selected' : '' }}>Belum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal_nikah" class="form-label">Tanggal Nikah</label>
                    <input type="date" class="form-control" name="tanggal_nikah" value="{{ old('tanggal_nikah', $jemaat->tanggal_nikah) }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

</div>
@endsection