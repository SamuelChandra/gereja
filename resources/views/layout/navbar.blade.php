<nav class="custom-navbar">
    <div class="custom-container">
        <div class="hamburger-menu" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="custom-nav-links" id="navMenu">
            <li><a href="{{ url('/gereja') }}">Home</a></li>
            <li class="custom-dropdown">
                <a href="{{ route('profile') }}">Profil Gereja</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('profile') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('profile') }}#visi-misi">Visi & Misi</a></li>
                    <li><a href="{{ route('profile') }}#struktur">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="custom-dropdown">
                <a href="{{ route('kegiatan-user') }}">Kegiatan</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('kegiatan-user') }}#jadwal-ibadah">Jadwal Ibadah</a></li>
                    <li><a href="{{ route('kegiatan-user') }}#kegiatan-gereja">Kegiatan Gereja</a></li>
                    <li><a href="{{ route('kegiatan-user') }}#pengumuman">Pengumuman</a></li>
                    <li><a href="{{ route('kegiatan-user') }}#berita-gereja">Berita Gereja</a></li>
                    <li><a href="{{ route('kegiatan-admin') }}">Kelola Kegiatan (Admin)</a></li>
                </ul>
            </li>

            <li class="custom-dropdown">
                <a href="{{ route('gallery') }}">Sosial Media</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('gallery') }}#live">Live Streaming</a></li>
                    <li><a href="{{ route('gallery') }}#video">Video</a></li>
                    <li><a href="{{ route('gallery') }}#foto">Photo</a></li>
                </ul>
            </li>
            <li class="custom-dropdown">
                <a href="{{ route('donation') }}">Persembahan</a>
            </li>
            
            <li class="custom-dropdown">
                <a href="{{ route('jemaat.index') }}">Informasi Jemaat</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('jemaat.create') }}">Tambah Jemaat</a></li>
                </ul>
            </li>
            <li class="custom-dropdown">
                <a href="{{ route('umkm-user') }}">UMKM</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('umkm-user-create') }}">Ajukan UMKM</a></li>
                    <li><a href="{{ route('umkm-admin') }}">Kelola UMKM (Admin)</a></li>
                </ul>
            </li>
            <li class="custom-dropdown login-menu">
                <a href="#">Login Admin</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('admin') }}">Login</a></li>
                    <li><a href="{{ route('admin') }}#register">Daftar</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        let navMenu = document.getElementById("navMenu");
        navMenu.classList.toggle("active");
    }
</script>