@extends('layout.app')

@section('title', 'Kelola Kegiatan & Berita Gereja')

@section('content')
    <div class="admin-container">
        <h1 class="admin-title">Kelola Kegiatan & Berita Gereja</h1>

        <!-- Form Tambah Kegiatan -->
        <section class="admin-section">
            <h2 class="section-title">Tambah Kegiatan</h2>
            <form action="#" method="POST" class="admin-form">
                @csrf
                <label>Nama Kegiatan:</label>
                <input type="text" name="nama_kegiatan" required>
                <label>Tanggal:</label>
                <input type="date" name="tanggal" required>
                <label>Deskripsi:</label>
                <textarea name="deskripsi" required></textarea>
                <button type="submit">Tambah</button>
            </form>
        </section>

        <!-- Daftar Kegiatan dengan Aksi Edit & Hapus -->
        <section class="admin-section">
            <h2 class="section-title">Daftar Kegiatan</h2>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pelayanan Sosial</td>
                        <td>10 April 2025</td>
                        <td>Pelayanan kepada masyarakat kurang mampu, mulai pukul 08:00 di Aula Gereja.</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Retreat Pemuda</td>
                        <td>20 Mei 2025</td>
                        <td>Retreat rohani bagi pemuda gereja di Puncak Retreat Center, mulai pukul 10:00.</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Form Tambah Berita Gereja -->
        <section class="admin-section">
            <h2 class="section-title">Tambah Berita Gereja</h2>
            <form action="#" method="POST" class="admin-form" enctype="multipart/form-data">
                @csrf
                <label>Judul Berita:</label>
                <input type="text" name="judul_berita" required>
                <label>Tanggal:</label>
                <input type="date" name="tanggal_berita" required>
                <label>Isi Berita:</label>
                <textarea name="isi_berita" required></textarea>
                <label>Gambar Berita:</label>
                <input type="file" name="gambar_berita" accept="image/*">
                <button type="submit">Tambah</button>
            </form>
        </section>

        <!-- Daftar Berita Gereja -->
        <section class="admin-section">
            <h2 class="section-title">Daftar Berita Gereja</h2>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pdt. Youhari Sutikno — Melayani dengan Hati</td>
                        <td>24 Maret 2025</td>
                        <td>"Pak Pendeta Yo... ini pribadinya tenang... kalau ketemu beliau itu rasanya damai..."</td>
                        <td><img src="{{ asset('images/news1.jpg') }}" alt="Gambar Berita" class="news-img"></td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Peneguhan GKJ Magelang</td>
                        <td>24 Maret 2025</td>
                        <td>Sejarah baru telah terukir bagi jemaat GKJ Magelang...</td>
                        <td><img src="{{ asset('images/news2.jpg') }}" alt="Gambar Berita" class="news-img"></td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection