@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Jemaat</h1>
    <a href="{{ route('jemaat.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form id="jemaatForm" action="{{ route('jemaat.store') }}" method="POST">
        @csrf

        <div class="row row-cols-1 row-cols-md-2 g-3">
            <!-- Left Section -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <strong>Data Pribadi</strong>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-4 col-form-label text-end">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-4 col-form-label text-end">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="gender">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="location_of_birth" class="col-sm-4 col-form-label text-end">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="location_of_birth">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="date_of_birth" class="col-sm-4 col-form-label text-end">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_of_birth" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="blood_group" class="col-sm-4 col-form-label text-end">Golongan Darah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="blood_group">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="education" class="col-sm-4 col-form-label text-end">Pendidikan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="education">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="work" class="col-sm-4 col-form-label text-end">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="work">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label text-end">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone_number" class="col-sm-4 col-form-label text-end">No. Telepon</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="phone_number" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label text-end">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="status_jemaat" class="col-sm-4 col-form-label text-end">Status Jemaat</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="status_jemaat">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <strong>Status Rohani</strong>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="status_baptis" class="col-sm-4 col-form-label text-end">Status Baptis</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="status_baptis" id="status_baptis">
                                    <option value="1">Sudah</option>
                                    <option value="0" selected>Belum</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_baptis" class="col-sm-4 col-form-label text-end">Tanggal Baptis</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_baptis">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gereja_baptis" class="col-sm-4 col-form-label text-end">Gereja Baptis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="gereja_baptis">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status_sidi" class="col-sm-4 col-form-label text-end">Status Sidi</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="status_sidi">
                                    <option value="1">Sudah</option>
                                    <option value="0" selected>Belum</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_sidi" class="col-sm-4 col-form-label text-end">Tanggal Sidi</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_sidi">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gereja_sidi" class="col-sm-4 col-form-label text-end">Gereja Sidi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="gereja_sidi">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status_nikah" class="col-sm-4 col-form-label text-end">Status Nikah</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="status_nikah">
                                    <option value="1">Sudah</option>
                                    <option value="0" selected>Belum</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_nikah" class="col-sm-4 col-form-label text-end">Tanggal Nikah</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_nikah">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gereja_nikah" class="col-sm-4 col-form-label text-end">Gereja Nikah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="gereja_nikah">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="d-flex justify-content-end mt-3">
            {{-- <button class="btn btn-success px-4">Simpan</button> --}}
            <button type="submit" class="btn btn-success px-4">Simpan</button>
        </div>
    </form>

</div>
@endsection

<style>
    .form-label {
        font-weight: bold;
    }

    .form-control,
    .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-success {
        background-color:rgb(245, 249, 246);
        border-color:rgb(245, 249, 246);
    }

    .btn-success:hover {
        background-color:rgb(50, 152, 196);
        border-color:hsl(202, 60.90%, 63.90%);
    }
</style>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const jemaatForm = document.getElementById('jemaatForm');

        jemaatForm.addEventListener('submit', function(event) {
            let errors = {};
            let values = {};

            // Error checking untuk semua input
            const inputFields = jemaatForm.querySelectorAll('input, select, textarea');
            inputFields.forEach(input => {
                if (input.name) {
                    if (input.hasAttribute('required') && !input.value.trim()) {
                        errors[input.name] = `${input.previousElementSibling.textContent.trim()} harus diisi.`;
                    }
                    values[input.name] = input.value;
                }
            });

            // Tampilkan error atau nilai
            if (Object.keys(errors).length > 0) {
                event.preventDefault(); // Mencegah form dikirim
                alert(JSON.stringify(errors, null, 2)); // Tampilkan error sebagai JSON
            } else {
                event.preventDefault(); // Mencegah form dikirim
                alert(JSON.stringify(values, null, 2)); // Tampilkan nilai sebagai JSON
                // Uncomment baris dibawah jika ingin mengirim form setelah pengecekan.
                // jemaatForm.submit();
            }
        });
    });
</script> --}}
