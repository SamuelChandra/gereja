@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div class="homepage-hero text-center text-white bg-cover bg-center" style="background-image: url('/hero-image.jpg');">
    <div class="overlay p-8 rounded-xl">
        <h1 class="homepage-title">Selamat Datang di Gereja Kami</h1>
        <p class="homepage-subtitle">Tempat untuk bertumbuh dalam iman dan komunitas</p>
        <a href="#tentang" class="homepage-btn">Pelajari Lebih Lanjut</a>
    </div>
</div>

<!--Pendeta Section -->
<div class="homepage-section bg-light">
    <h2 class="homepage-heading text-center">Pendeta Jemaat Koinonia Kupang</h2>
    <p class="homepage-subtitle text-center">Jemaat Koinonia memiliki 5 orang pendeta yang melayani</p>
    
    <div class="pendeta-wrapper">
        @php
            $pendetas = [
                ['nama' => 'Pdt. John Doe, M.Th', 'foto' => asset('storage/posts/random1.jpg')],
                ['nama' => 'Pdt. Jane Smith, S.Th', 'foto' => asset('storage/posts/random1.jpg')],
                ['nama' => 'Pdt. Michael Lee, M.Div', 'foto' => asset('storage/posts/random1.jpg')],
                ['nama' => 'Pdt. Sarah Tan, D.Min', 'foto' => asset('storage/posts/random1.jpg')],
                ['nama' => 'Pdt. David Lim, S.Th', 'foto' => asset('storage/posts/random1.jpg')],
            ];
        @endphp

        @foreach($pendetas as $pendeta)
        <div class="pendeta-card">
            <img src="{{ $pendeta['foto'] }}" class="pendeta-img" alt="{{ $pendeta['nama'] }}">
            <h3 class="pendeta-name">{{ $pendeta['nama'] }}</h3>
        </div>
        @endforeach
    </div>
</div>

<!-- Tentang Gereja -->
<div id="tentang" class="homepage-section">
    <h2 class="homepage-heading">Tentang Kami</h2>
    <p class="homepage-text">
        Kami adalah komunitas yang penuh kasih, berfokus pada ibadah, pertumbuhan spiritual, dan pelayanan kepada sesama.
    </p>
    <a href="{{ route('profile') }}" class="homepage-link">Baca Selengkapnya</a>
</div>

<!-- Statistik Gereja --> 
<div class="statistik-wrapper">
    <div class="statistik-box">
        <div class="statistik-item">
            <div class="statistik-number">6902</div>
            <div class="statistik-label">Jemaat Aktif</div>
        </div>
        <div class="statistik-item">
            <div class="statistik-number">5</div>
            <div class="statistik-label">Pendeta</div>
        </div>
        <div class="statistik-item">
            <div class="statistik-number">10</div>
            <div class="statistik-label">Lingkungan</div>
        </div>
        <div class="statistik-item">
            <div class="statistik-number">1704</div>
            <div class="statistik-label">KK</div>
        </div>
    </div>
</div>

<!-- Acara Mendatang -->
<div class="homepage-section bg-light">
    <h2 class="homepage-heading">Acara Mendatang</h2>
    <div id="eventCarousel" class="carousel">
        <button class="carousel-btn prev">&#10094;</button>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h3 class="event-title">Ibadah Minggu</h3>
                <p class="event-info">Minggu, 10.00 WIB</p>
            </div>
            <div class="carousel-item">
                <h3 class="event-title">Doa Bersama</h3>
                <p class="event-info">Rabu, 19.00 WIB</p>
            </div>
            <div class="carousel-item">
                <h3 class="event-title">Retreat Rohani</h3>
                <p class="event-info">Sabtu, 09.00 WIB</p>
            </div>
        </div>
        <button class="carousel-btn next">&#10095;</button>
    </div>
</div>

<!-- Jadwal Ibadah -->
<div class="homepage-section">
    <h2 class="homepage-heading">Jadwal Ibadah</h2>
    <p class="homepage-text">Lihat jadwal ibadah mingguan dan spesial kami.</p>
    <a href="{{ route('kegiatan-user') }}#jadwal-ibadah">Jadwal Ibadah</a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselItems = document.querySelectorAll(".carousel-item");
        const prevBtn = document.querySelector(".carousel-btn.prev");
        const nextBtn = document.querySelector(".carousel-btn.next");
        let currentIndex = 0;

        function showSlide(index) {
            carouselItems.forEach((item, i) => {
                item.classList.remove("active");
                item.style.display = "none";
            });
            carouselItems[index].classList.add("active");
            carouselItems[index].style.display = "block";
        }

        nextBtn.addEventListener("click", function() {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            showSlide(currentIndex);
        });

        prevBtn.addEventListener("click", function() {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showSlide(currentIndex);
        });

        showSlide(currentIndex);
    });
</script>

@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
