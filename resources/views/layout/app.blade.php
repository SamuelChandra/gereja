<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/jemaat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jemaat-index.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/kegiatan-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kegiatan-user.css') }}">

    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

    <link rel="stylesheet" href="{{ asset('css/umkm-user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/umkm-user-create.css') }}">
    <link rel="stylesheet" href="{{ asset('css/umkm-admin.css') }}">

    <link rel="stylesheet" href="{{ asset('css/donasi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

@include('layout.navbar')

    <div class="container">
        @yield('content')
    </div>

@include('layout.footer')

</body>
</html>

{{-- <script>
    document.querySelector('.hamburger-menu').addEventListener('click', function () {
        document.querySelector('.nav-links').classList.toggle('active');
    });
</script> --}}