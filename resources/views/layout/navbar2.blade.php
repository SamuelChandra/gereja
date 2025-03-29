<nav class="navbar">
    <div class="container">
        <!-- <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="GMIT Koinonia">
        </a> -->

        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Beranda</a></li>

            <li class="dropdown">
                <a href="#">Profil Gereja </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('profile') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('profile') }}#visi-misi">Visi & Misi</a></li>
                    <li><a href="{{ route('profile') }}#struktur">Struktur Organisasi</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Jadwal & Kegiatan </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('events') }}">Jadwal Ibadah</a></li>
                    <li><a href="{{ route('events') }}#kegiatan">Kegiatan Gereja</a></li>
                    <li><a href="{{ route('events') }}#pendaftaran">Pendaftaran Acara</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Informasi Jemaat </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('jemaat.index') }}">Data Jemaat</a></li>
                    <li><a href="{{ route('jemaat.create') }}">Tambah Jemaat</a></li>
                    <li><a href="{{ route('congregation') }}#pendataan">Pendataan Pelayan</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Pelayanan Digital </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('services') }}">Renungan & Khotbah</a></li>
                    <li><a href="{{ route('services') }}#livestream">Live Streaming</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">UMKM Gereja </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('marketplace') }}">Daftar UMKM</a></li>
                    <li><a href="{{ route('marketplace') }}#produk">Produk & Jasa</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Persembahan </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('donation') }}">Cara Donasi</a></li>
                    <li><a href="{{ route('donation') }}#rekening">Rekening Gereja</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Pengumuman </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('announcements') }}">Pengumuman</a></li>
                    <li><a href="{{ route('announcements') }}#berita">Berita Gereja</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Pusat Bantuan </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('help') }}">FAQ</a></li>
                    <li><a href="{{ route('help') }}#kontak">Kontak Admin</a></li>
                </ul>
            </li>

            <li class="dropdown login-menu">
                <a href="#"> Login Admin</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin') }}">Login</a></li>
                    <li><a href="{{ route('admin') }}#register">Daftar</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
