@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/umkm-admin.css') }}">

<div class="umkm-admin">
    <h1>Kelola UMKM</h1>

    <h2>Permintaan UMKM Baru</h2>
    <table class="umkm-table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama UMKM</th>
                <th>Alamat</th>
                <th>Pengaju</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dummy data untuk mockup -->
            <tr>
                <td><img src="{{ asset('images/bakery.jpg') }}" alt="Bakery Bunda"></td>
                <td>Bakery Bunda</td>
                <td>Jl. El Tari No.12, Kupang</td>
                <td>Maria T.</td>
                <td>Toko roti yang menyediakan aneka kue dan roti segar setiap hari.</td>
                <td>
                    <button class="approve-btn">Setujui</button>
                    <button class="reject-btn">Tolak</button>
                </td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/sembako.jpg') }}" alt="Toko Sembako"></td>
                <td>Toko Sembako</td>
                <td>Jl. Soekarno Hatta No.5, Oesapa</td>
                <td>Bpk. Andi</td>
                <td>Menjual kebutuhan pokok seperti beras, gula, minyak, dan kebutuhan rumah tangga lainnya.</td>
                <td>
                    <button class="approve-btn">Setujui</button>
                    <button class="reject-btn">Tolak</button>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>UMKM Terdaftar</h2>
    <table class="umkm-table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama UMKM</th>
                <th>Alamat</th>
                <th>Pemilik</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dummy data untuk mockup -->
            <tr>
                <td><img src="{{ asset('images/laundry.jpg') }}" alt="Laundry Express"></td>
                <td>Laundry Express</td>
                <td>Jl. Timor Raya No.7, Kelapa Lima</td>
                <td>Bpk. Yusuf</td>
                <td>Jasa laundry dan cuci kiloan dengan harga terjangkau.</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Hapus</button>
                </td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/cafe.jpg') }}" alt="Café Angkringan"></td>
                <td>Café Angkringan</td>
                <td>Jl. Ahmad Yani No.3, Kupang Timur</td>
                <td>Ibu Sari</td>
                <td>Menyediakan makanan khas angkringan dengan suasana nyaman dan harga terjangkau.</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
