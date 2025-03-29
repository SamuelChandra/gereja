@extends('layout.app')

@section('title', 'Gallery')

@section('content')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

<div class="gallery-container">
    <!-- Live Streaming YouTube -->
    <div class="live-stream">
        <iframe src="https://www.youtube.com/embed/live_stream?channel=YOUR_CHANNEL_ID" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Video yang sudah berlalu -->
    <h2>Past Live Streams</h2>
    <div class="video-grid">
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_5" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/VIDEO_ID_6" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Foto Instagram/Facebook -->
    <h2>Photo Gallery</h2>
    <div class="photo-grid">
        <img src="https://via.placeholder.com/300" alt="Photo 1">
        <img src="https://via.placeholder.com/300" alt="Photo 2">
        <img src="https://via.placeholder.com/300" alt="Photo 3">
        <img src="https://via.placeholder.com/300" alt="Photo 4">
        <img src="https://via.placeholder.com/300" alt="Photo 5">
        <img src="https://via.placeholder.com/300" alt="Photo 6">
    </div>
</div>

@endsection
