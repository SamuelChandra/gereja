@extends('layout.app')

@section('title', 'Donasi Gereja')

@section('content')
<div class="donasi-container">
    <section>
        <h1 class="donasi-title">Dukung Pelayanan Gereja</h1>
        <p class="donasi-description">
            Terima kasih atas dukungan dan kemurahan hati Anda dalam mendukung pelayanan dan misi gereja kami. 
            Silakan lakukan donasi melalui QR Code atau transfer ke rekening berikut.
        </p>

        <div class="qr-section">
            <img src="{{ asset('/storage/posts/qr-Gereja.png') }}" alt="QR Code Donasi">
            <p class="bank-info">Rekening Bank Gereja:</p>
            <p class="account-number">123-456-7890 (Bank ABC - Gereja Koinonia)</p>
            <p class="note">Mohon sertakan keterangan "Donasi" pada transaksi Anda.</p>
        </div>
    </section>
    <section class="donation-section">
        <h2>Nomor Rekening Gereja</h2>
        <p>Anda juga dapat melakukan transfer langsung ke rekening gereja:</p>
        <div class="bank-details">
            <p><strong>Bank:</strong> BCA</p>
            <p><strong>Nomor Rekening:</strong> 123-456-7890</p>
            <p><strong>Atas Nama:</strong> Gereja ABC</p>
        </div>
                <div class="bank-details">
            <p><strong>Bank:</strong> CBA</p>
            <p><strong>Nomor Rekening:</strong> 456-789-0123</p>
            <p><strong>Atas Nama:</strong> Gereja CBA</p>
        </div>
                <div class="bank-details">
            <p><strong>Bank:</strong> ABC</p>
            <p><strong>Nomor Rekening:</strong> 789-012-3456</p>
            <p><strong>Atas Nama:</strong> Gereja ABC</p>
        </div>
    </section>    
</div>
@endsection
