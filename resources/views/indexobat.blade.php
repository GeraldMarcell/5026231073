@extends('template')

@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Data Obat</h3>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="/obat/tambah" class="btn btn-info">+ Tambah Obat Baru</a>
            <form action="/obat/cari" method="GET" class="form-inline mb-3">
                <label for="cari" class="mr-2">Cari Data Obat:</label>
                <input type="text" name="cari" id="cari" placeholder="Cari obat..." class="form-control mr-2">
                <input type="submit" value="CARI" class="btn btn-primary">
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Merk Obat</th>
            <th>Harga Obat</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($obat as $p)
            <tr>
                <td>{{ $p->obat_id }}</td>
                <td>{{ $p->merkobat }}</td>
                <td>{{ $p->hargaobat }}</td>
                <td>
                    @if ($p->tersedia == 1)
                        <span class="badge badge-success">Tersedia</span>
                    @else
                        <span class="badge badge-danger">Tidak Tersedia</span>
                    @endif
                </td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/obat/edit/{{ $p->obat_id }}" class="btn btn-success">Edit</a>
                    <a href="/obat/hapus/{{ $p->obat_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $obat->links() }} <!--hanya bisa dipake dengan paginate, saat get() harus dihapus -->
@endsection
