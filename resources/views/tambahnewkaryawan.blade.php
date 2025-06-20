@extends('template')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0"><i class="fas fa-user-plus mr-2"></i> Tambah Data New Karyawan</h3>
        </div>
        <div class="card-body">
            <a href="/eas" class="btn btn-outline-secondary mb-4">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>

            <form action="/eas/store" method="post" onsubmit="return validasi();">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-id-card mr-2"></i>NIP
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nip" name="nip" required>
                        @error('nip')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-user mr-2"></i>Nama
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pangkat" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-building mr-2"></i>Pangkat
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pangkat" name="pangkat" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gaji" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-sitemap mr-2"></i>Gaji
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="gaji" name="gaji" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 offset-sm-2">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save mr-2"></i>Simpan Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
