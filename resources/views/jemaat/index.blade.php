@extends('layout.app')

@section('content')

<div class="jemaat-container">
    <h1 class="jemaat-title">Daftar Jemaat</h1>
    <a href="{{ route('jemaat.create') }}" class="jemaat-btn-add">Tambah Jemaat</a>

    {{-- Alert Success/Error --}}
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    {{-- Table Jemaat --}}
    <table class="jemaat-table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Status Keluarga</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Golongan Darah</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Suku</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Email</th>
                <th>Status Jemaat</th>
                {{-- <th>Status Rohani</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jemaats as $jemaat)
            <tr>
                <td>{{ $jemaat->name ?? '-' }}</td>
                <td>{{ $jemaat->gender ?? '-' }}</td>
                <td>{{ $jemaat->status_in_family ?? '-' }}</td>
                <td>{{ $jemaat->location_of_birth ?? '-' }}</td>
                <td>{{ $jemaat->date_of_birth ?? '-' }}</td>
                <td>{{ $jemaat->blood_group ?? '-' }}</td>
                <td>{{ $jemaat->education ?? '-' }}</td>
                <td>{{ $jemaat->work ?? '-' }}</td>
                <td>{{ $jemaat->ethnicity ?? '-' }}</td>
                <td>{{ $jemaat->address ?? '-' }}</td>
                <td>{{ $jemaat->phone_number ?? '-' }}</td>
                <td>{{ $jemaat->email ?? '-' }}</td>
                <td>{{ $jemaat->status_jemaat ?? '-' }}</td>
                {{-- <td>{{ $jemaat->statusRohani->nama_status ?? '-' }}</td> --}}
                <td>
                    <form action="{{ route('jemaat.edit', $jemaat->id) }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="jemaat-btn-edit">Edit</button>
                    </form>
                    <form action="{{ route('jemaat.destroy', $jemaat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="jemaat-btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="15" class="jemaat-text-danger text-center">Tidak ada data jemaat.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
