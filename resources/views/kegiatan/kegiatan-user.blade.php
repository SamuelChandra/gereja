@extends('layout.app')

@section('title', 'Kegiatan Gereja')

@section('content')
    <div class="user-container">
        <h1 class="user-title">Kegiatan Gereja</h1>

        <!-- Jadwal Ibadah -->
        <section class="user-section">
            <h2 class="section-title">Jadwal Ibadah</h2>
            <ul class="schedule-list">
                <li><strong>Minggu, 7 April 2025:</strong> Ibadah Umum - 08:00 WIB</li>
                <li><strong>Rabu, 10 April 2025:</strong> Doa Malam - 19:00 WIB</li>
                <li><strong>Jumat, 12 April 2025:</strong> Ibadah Pemuda - 18:30 WIB</li>
            </ul>
        </section>

        <!-- Kegiatan Gereja -->
        <section class="user-section">
            <h2 class="section-title">Kegiatan Gereja</h2>
            <div class="event-list">
                <div class="event-item">
                    <h3>Pelayanan Sosial</h3>
                    <p><strong>Tanggal:</strong> 10 April 2025</p>
                    <p><strong>Lokasi:</strong> Aula Gereja</p>
                    <p><strong>Deskripsi:</strong> Pelayanan kepada masyarakat kurang mampu, dimulai pukul 08:00 WIB.</p>
                </div>
                <div class="event-item">
                    <h3>Retreat Pemuda</h3>
                    <p><strong>Tanggal:</strong> 20 Mei 2025</p>
                    <p><strong>Lokasi:</strong> Puncak Retreat Center</p>
                    <p><strong>Deskripsi:</strong> Retreat rohani bagi pemuda gereja, dimulai pukul 10:00 WIB.</p>
                </div>
            </div>
        </section>

        <!-- Pengumuman -->
        <section class="user-section">
            <h2 class="section-title">Pengumuman</h2>
            <ul class="announcement-list">
                <li><strong>Penggalangan Dana:</strong> Minggu, 14 April 2025, setelah ibadah.</li>
                <li><strong>Baptisan Kudus:</strong> Akan diadakan pada 28 April 2025.</li>
            </ul>
        </section>

        <!-- Berita Gereja -->
        <section class="user-section berita-gereja">
            <h2 class="section-title">Berita Gereja</h2>
            <div class="news-container">
                <div class="news-card">
                    <img src="{{ asset('storage/posts/logoGereja.jpg') }}" alt="Berita 1" class="news-image">
                    <h3 class="news-title">Pdt. Youhari Sutikno — Melayani dengan Hati</h3>
                    <p class="news-date">Maret 24, 2025</p>
                    <p class="news-description">"Pak Pendeta Yo... ini pribadinya tenang... kalau ketemu beliau itu rasanya damai..."</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="news-card">
                    <img src="{{ asset('storage/posts/logoGereja.jpg') }}" alt="Berita 2" class="news-image">
                    <h3 class="news-title">Peneguhan GKJ Magelang</h3>
                    <p class="news-date">Maret 24, 2025</p>
                    <p class="news-description">Sejarah baru telah terukir bagi jemaat GKJ Magelang...</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="news-card">
                    <img src="{{ asset('storage/posts/logoGereja.jpg') }}" alt="Berita 3" class="news-image">
                    <h3 class="news-title">Sidang 81 GKJ Klasis Banyumas Utara</h3>
                    <p class="news-date">Maret 19, 2025</p>
                    <p class="news-description">Sidang telah terselenggara di GKJ Klasis Banyumas...</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </section>
    </div>
@endsection