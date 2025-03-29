@extends('layout.app')

@section('content')
<div class="container">
    <h1>Tambah Jemaat</h1>
    <a href="{{ route('jemaat.index') }}" class="btn btn-secondary">Kembali</a>

    <form id="jemaatForm" action="{{ route('jemaat.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="gender">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status_in_family" class="form-label">Status dalam Keluarga</label>
            <input type="text" class="form-control" name="status_in_family">
        </div>
        <div class="mb-3">
            <label for="location_of_birth" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="location_of_birth">
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="date_of_birth" required>
        </div>
        <div class="mb-3">
            <label for="blood_group" class="form-label">Golongan Darah</label>
            <input type="text" class="form-control" name="blood_group">
        </div>
        <div class="mb-3">
            <label for="education" class="form-label">Pendidikan</label>
            <input type="text" class="form-control" name="education">
        </div>
        <div class="mb-3">
            <label for="work" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="work">
        </div>
        <div class="mb-3">
            <label for="ethnicity" class="form-label">etnis</label>
            <input type="text" class="form-control" name="ethnicity">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" name="address" required></textarea>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" name="phone_number" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="status_jemaat" class="form-label">Status Jemaat</label>
            <select class="form-select" name="status_jemaat">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <!-- <div class="mb-3">
        <label for="status_rohani_id" class="form-label">Status Rohani</label>    
            <div>
                <div class="mb-3">
                    <label for="status_baptis_input" class="form-label">Status Baptis</label>
                    <input type="checkbox" class="form-check-input" name="status_baptis"required>
                </div>
            </div>
         </div> -->

        <div class="mb-3">
        <label for="status_rohani_id" class="form-label">Status Rohani</label>    
            <div>
                <div class="mb-3">
                    <label for="status_baptis" class="form-label">Status Baptis</label>
                    <select class="form-select" name="status_baptis" id="status_baptis">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
            </div>
         </div>


        <!-- <div>
            <div class="mb-3">
                <label for="status_extra_id" class="form-label">Status Extra</label>
                <select class="form-select" name="status_extra_id">
                    <option value="">Pilih Status Extra</option>
                    @foreach($statusExtra as $extra)
                        <option value="{{ $extra->id }}" {{ old('status_extra_id', $jemaat->statusExtra->id ?? '') == $extra->id ? 'selected' : '' }}>{{ $extra->nama_status_extra }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="jabatan_id" class="form-label">Jabatan</label>
                <select class="form-select" name="jabatan_id">
                    <option value="">Pilih Jabatan</option>
                    @foreach($jabatan as $j)
                        <option value="{{ $j->id }}" {{ old('jabatan_id', $jemaat->jabatan->id ?? '') == $j->id ? 'selected' : '' }}>{{ $j->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="lingkungan_id" class="form-label">Lingkungan</label>
                <select class="form-select" name="lingkungan_id">
                    <option value="">Pilih Lingkungan</option>
                    @foreach($lingkungan as $l)
                        <option value="{{ $l->id }}" {{ old('lingkungan_id', $jemaat->lingkungan->id ?? '') == $l->id ? 'selected' : '' }}>{{ $l->nama_lingkungan }}</option>
                    @endforeach
                </select>
            </div>
        </div> -->
        
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    
</div>
<script>

// document.getElementById('jemaatForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Mencegah form dari submit default    
//     console.log('hi')
// });

</script>
@endsection