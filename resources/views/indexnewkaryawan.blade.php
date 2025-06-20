@extends('template')

@section('content')

    <h3>Data New Karyawan</h3>

    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/eas/tambah" class="btn btn-info"> + Tambah Data</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach ($newkaryawan as $p)
            <tr>
                <td>{{ $p->NIP }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->pangkat }}</td>
                <td>{{ number_format($p->gaji, 2, ',', '.') }}</td>
                <td>
                    <a href="/eas/hapus/{{ $p->NIP }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
