@extends('layout.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/umkm-user-create.css') }}">

<div class="umkm-user-create">
    <h1>Ajukan UMKM Baru</h1>
    <form id="umkmForm">
        <label for="nama">Nama UMKM:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>

        <label for="lokasi">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" required>

        <label for="gambar">Upload Gambar:</label>
        <input type="file" id="gambar" name="gambar" required>

        <button type="submit">Ajukan</button>
    </form>

    <h2>Daftar UMKM</h2>
    <ul id="umkmList"></ul>
</div>

<script>
    document.getElementById('umkmForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Ambil nilai dari input form
        const nama = document.getElementById('nama').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const lokasi = document.getElementById('lokasi').value;
        const gambarInput = document.getElementById('gambar');

        if (gambarInput.files.length > 0) {
            const file = gambarInput.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                // Buat elemen list untuk menampilkan UMKM
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    <strong>${nama}</strong> - ${lokasi} <br>
                    <em>${deskripsi}</em> <br>
                    <img src="${e.target.result}" width="100" alt="Gambar UMKM">
                `;
                document.getElementById('umkmList').appendChild(listItem);
            };
            reader.readAsDataURL(file);
        }

        // Reset form setelah submit
        document.getElementById('umkmForm').reset();
    });
</script>
@endsection
