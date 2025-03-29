@extends('layout.app')

@section('content')
<div class="container">
    <h1>Daftar Jemaat</h1>
    <a href="{{ route('jemaat.create') }}" class="btn btn-primary">Tambah Jemaat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
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
                <th>Status Rohani</th>
                <!-- <th>Status Extra</th>
                <th>Jabatan</th>
                <th>Lingkungan</th> -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jemaats as $jemaat)
            <tr>
                <td>{{ $jemaat->name }}</td>
                <td>{{ $jemaat->gender }}</td>
                <td>{{ $jemaat->status_in_family }}</td>
                <td>{{ $jemaat->location_of_birth }}</td>
                <td>{{ $jemaat->date_of_birth }}</td>
                <td>{{ $jemaat->blood_group }}</td>
                <td>{{ $jemaat->education }}</td>
                <td>{{ $jemaat->work }}</td>
                <td>{{ $jemaat->ethnicity }}</td>
                <td>{{ $jemaat->address }}</td>
                <td>{{ $jemaat->phone_number }}</td>
                <td>{{ $jemaat->email }}</td>
                <td>{{ $jemaat->status_jemaat }}</td>
                <td>{{ $jemaat->statusRohani ? $jemaat->statusRohani->nama_status : '-' }}</td>
                <!-- <td>{{ $jemaat->statusExtra ? $jemaat->statusExtra->nama_status_extra : '-' }}</td>
                <td>{{ $jemaat->jabatan ? $jemaat->jabatan->nama_jabatan : '-' }}</td>
                <td>{{ $jemaat->lingkungan ? $jemaat->lingkungan->nama_lingkungan : '-' }}</td> -->
                <td>
                    <form action="{{ route('jemaat.edit', $jemaat->id) }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </form>
                    <form action="{{ route('jemaat.destroy', $jemaat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection