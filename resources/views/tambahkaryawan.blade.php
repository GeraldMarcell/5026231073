@extends('template')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0"><i class="fas fa-user-plus mr-2"></i> Tambah Data Karyawan</h3>
        </div>
        <div class="card-body">
            <a href="/karyawan" class="btn btn-outline-secondary mb-4">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>

            <form action="/karyawan/store" method="post">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="kodepegawai" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-id-card mr-2"></i>Kode Pegawai
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="namalengkap" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-user mr-2"></i>Nama Lengkap
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="divisi" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-building mr-2"></i>Divisi
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="divisi" name="divisi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="departemen" class="col-sm-2 col-form-label font-weight-bold">
                        <i class="fas fa-sitemap mr-2"></i>Departemen
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="departemen" name="departemen" required>
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
