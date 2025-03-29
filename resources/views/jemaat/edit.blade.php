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
            <label for="status_in_family" class="form-label">Status dalam Keluarga</label>
            <input type="text" class="form-control" name="status_in_family" value="{{ old('status_in_family', $jemaat->status_in_family) }}">
        </div>

        <div class="mb-3">
            <label for="location_of_birth" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="location_of_birth" value="{{ old('location_of_birth', $jemaat->location_of_birth) }}">
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth', $jemaat->date_of_birth) }}" required>
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
            <label for="ethnicity" class="form-label">Suku</label>
            <input type="text" class="form-control" name="ethnicity" value="{{ old('ethnicity', $jemaat->ethnicity) }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" name="address" required>{{ old('address', $jemaat->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $jemaat->phone_number) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $jemaat->email) }}">
        </div>

        <div class="mb-3">
            <label for="status_jemaat" class="form-label">Status Jemaat</label>
            <input type="text" class="form-control" name="status_jemaat" value="{{ old('status_jemaat', $jemaat->status_jemaat) }}" required>
        </div>

        <div class="mb-3">
            <label for="status_rohani_id" class="form-label">Status Rohani</label>
            <select class="form-select" name="status_rohani_id">
                @foreach($statusRohani as $status)
                    <option value="{{ $status->id }}" {{ old('status_rohani_id', $jemaat->status_rohani_id) == $status->id ? 'selected' : '' }}>{{ $status->nama_status }}</option>
                @endforeach
            </select>
        </div>

         <div class="mb-3">
            <label for="status_extra_id" class="form-label">Status Extra</label>
            <select class="form-select" name="status_extra_id">
                @foreach($statusExtra as $extra)
                    <option value="{{ $extra->id }}" {{ old('status_extra_id', $jemaat->status_extra_id) == $extra->id ? 'selected' : '' }}>{{ $extra->nama_status_extra }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jabatan_id" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan_id">
                @foreach($jabatan as $j)
                    <option value="{{ $j->id }}" {{ old('jabatan_id', $jemaat->jabatan_id) == $j->id ? 'selected' : '' }}>{{ $j->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="lingkungan_id" class="form-label">Lingkungan</label>
            <select class="form-select" name="lingkungan_id">
                @foreach($lingkungan as $l)
                    <option value="{{ $l->id }}" {{ old('lingkungan_id', $jemaat->lingkungan_id) == $l->id ? 'selected' : '' }}>{{ $l->nama_lingkungan }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection