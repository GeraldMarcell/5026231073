@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Nama </label>
                </div>
                <div class="col-6">
                    <input type="text" name="nama" required="required" class="form-control" value="{{ $p->pegawai_nama }}"> <br />
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Jabatan </label>
                </div>
                <div class="col-6">
                    <input type="text" name="jabatan" required="required" class="form-control" value="{{ $p->pegawai_jabatan }}"> <br />
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Umur </label>
                </div>
                <div class="col-6">
                    <input type="number" name="umur" required="required" class="form-control" value="{{ $p->pegawai_umur }}"> <br />
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Alamat </label>
                </div>
                <div class="col-6">
                    <input name="alamat" required="required" class="form-control" value="{{ $p->pegawai_alamat }}"> <br />
                </div>
            </div>
            <!--Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
            Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
            Alamat
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br />-->
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
