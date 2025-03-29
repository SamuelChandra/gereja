@extends('layout.app')

@section('title', 'Profil Gereja Koinonia')

@section('content')
    <div class="profile-container">
        <h1 class="profile-title">Profil Gereja Koinonia</h1>
        
        <!-- Sejarah Gereja -->
        <section id="sejarah" class="profile-section">
            <h2 class="section-title">Sejarah Gereja Koinonia</h2>
            <div class="section-content">
                <img src="{{ asset('storage/posts/gallery-3.jpg') }}" alt="Gereja Koinonia" class="profile-image">
                <div class="text-content">
                    <p>
                        Gereja Koinonia Kupang berdiri pada tahun 1985 sebagai bagian dari gerakan pertumbuhan gereja di Nusa Tenggara Timur. 
                        Awalnya, gereja ini dimulai sebagai persekutuan kecil yang berkembang menjadi komunitas yang lebih besar karena 
                        kebutuhan akan tempat ibadah bagi jemaat setempat.
                    </p>
                    <p>
                        Dengan komitmen untuk menyebarkan kasih dan pelayanan, gereja ini telah menjadi pusat spiritual bagi banyak umat Kristen 
                        di Kupang. Selama bertahun-tahun, berbagai program pelayanan dan sosial telah dilaksanakan, termasuk sekolah minggu, 
                        pelayanan pemuda, serta kegiatan sosial yang membantu masyarakat sekitar.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Visi & Misi -->
        <section id="visi-misi" class="profile-section">
            <h2 class="section-title">Visi & Misi</h2>
            <div class="section-content">
                <h3 class="sub-title">Visi</h3>
                <p class="profile-text">
                    Menjadi komunitas iman yang berpusat pada Kristus, membangun generasi yang hidup dalam kasih, kebenaran, dan pelayanan.
                </p>
                <h3 class="sub-title">Misi</h3>
                <ul class="profile-list">
                    <li>Menyebarkan Injil dan membawa lebih banyak orang kepada Kristus.</li>
                    <li>Membina jemaat melalui ibadah, pengajaran, dan pelayanan sosial.</li>
                    <li>Meningkatkan kepedulian terhadap masyarakat melalui aksi sosial dan kemanusiaan.</li>
                    <li>Menumbuhkan generasi muda yang memiliki iman yang kuat dan berbasis nilai-nilai Kristen.</li>
                </ul>
            </div>
        </section>
        
        <!-- Struktur Organisasi -->
        <section id="struktur" class="profile-section">
            <h2 class="section-title">Struktur Organisasi</h2>
            <div class="section-content">
                <ul class="profile-list">
                    <li><strong>Gembala Sidang:</strong> Pdt. Yohanes Markus</li>
                    <li><strong>Penatua:</strong> Bpk. Samuel L. / Ibu Maria R.</li>
                    <li><strong>Pemimpin Ibadah:</strong> Tim Liturgi Gereja</li>
                    <li><strong>Pelayanan Musik & Pujian:</strong> Tim Worship</li>
                    <li><strong>Sekretariat:</strong> Bpk. Daniel / Ibu Esther</li>
                    <li><strong>Pelayanan Anak:</strong> Tim Sekolah Minggu</li>
                    <li><strong>Pelayanan Sosial:</strong> Departemen Diakonia</li>
                </ul>
            </div>
        </section>
    </div>
@endsection
