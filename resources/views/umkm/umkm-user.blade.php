@extends('layout.app')

@section('content')
<div class="umkm-container">
    <h1>Daftar UMKM Terdaftar</h1>
    <div class="umkm-list">
        @php
            $umkms = [
                ['nama' => 'Toko Berkat', 'jalan' => 'Jalan El Tari No. 10'],
                ['nama' => 'Kupang Mart', 'jalan' => 'Jalan Soekarno-Hatta No. 22'],
                ['nama' => 'Warung Sumber Rejeki', 'jalan' => 'Jalan Diponegoro No. 5'],
                ['nama' => 'Kedai Kopi Sejahtera', 'jalan' => 'Jalan Ahmad Yani No. 18'],
                ['nama' => 'Bengkel Berkat Motor', 'jalan' => 'Jalan Imam Bonjol No. 30'],
                ['nama' => 'Laundry Bersih Wangi', 'jalan' => 'Jalan Frans Seda No. 7'],
                ['nama' => 'Toko Sembako Makmur', 'jalan' => 'Jalan Timor Raya No. 12'],
                ['nama' => 'Percetakan Harapan Baru', 'jalan' => 'Jalan Jendral Sudirman No. 15'],
                ['nama' => 'Catering Manna', 'jalan' => 'Jalan Kartini No. 9'],
                ['nama' => 'Toko Roti Berkah', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Kopi Nusantara', 'jalan' => 'Bandung'],
                ['nama' => 'Warung Sate Cak Maman', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Kerajinan Kayu Jati', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Batik Cantik', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Ayam Geprek Joss', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Es Kopi Kekinian', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Laundry Express', 'jalan' => 'Jalan Sudirman No. 43'],
                ['nama' => 'Toko Bunga Indah', 'jalan' => 'Jalan Sudirman No. 43'],
            ];
        @endphp

        @foreach($umkms as $index => $umkm)
        <div class="umkm-item">
            <img src="{{ asset("storage/umkm/umkm" . ($index + 1) . ".jpg") }}" alt="{{ $umkm['nama'] }}">
            <h2>{{ $umkm['nama'] }}</h2>
            <p>Deskripsi singkat mengenai {{ $umkm['nama'] }} yang menjual berbagai produk unggulan.</p>
            <p><strong>Lokasi:</strong> {{ $umkm['jalan'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection