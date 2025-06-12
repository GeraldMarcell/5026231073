@extends('template')

@section('content')

    <h3>Data Karyawan</h3>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $karyawan->links() }} <!-- hanya bisa dipake dengan paginate, saat get() harus dihapus -->
        <a href="/karyawan/tambah" class="btn btn-info"> + Tambah Data</a>
    </div>

@endsection
