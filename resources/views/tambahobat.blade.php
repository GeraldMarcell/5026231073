@extends('template')

@section('content')
    <h3>Data Obat</h3>

    <a href="/obat"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke obat/store untuk dilakukan routing --}}
    <form action="/obat/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk Obat </label>
            </div>
            <div class="col-6">
                <input type="text" name="merkobat" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga Obat </label>
            </div>
            <div class="col-6">
                <input type="text" name="hargaobat" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
                <!--<input type="number" name="tersedia" min="0" max="1" step="1" required="required" class="form-control"> <br />-->
                <select name="tersedia" required class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat </label>
            </div>
            <div class="col-6">
                <textarea type="number" name="berat" required="required" class="form-control"></textarea> <br />
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
