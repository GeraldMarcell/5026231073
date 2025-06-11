@extends('template')

@section('content')

    <h3>Edit Obat</h3>

    <a href="/obat"> Kembali</a>

    <br />
    <br />

    @foreach ($obat as $p)
        <form action="/obat/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="obat_id" value="{{ $p->obat_id }}"> <br />

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Merk Obat </label>
                </div>
                <div class="col-6">
                    <input type="text" name="merkobat" required="required" class="form-control" value="{{ $p->merkobat }}"> <br />
                </div>
            </div>
                    <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga Obat </label>
            </div>
            <div class="col-6">
                <input type="text" name="hargaobat" required="required" class="form-control" value="{{ $p->hargaobat }}"> <br />
            </div>
        </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Tersedia </label>
                </div>
                <div class="col-6">
                    <select name="tersedia" required class="form-control">
                        <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Berat </label>
                </div>
                <div class="col-6">
                    <input type="text" name="berat" required="required" class="form-control" value="{{ $p->berat }}"> <br />
                </div>
            </div>

                <!--Merk Obat <input type="text" required="required" name="merkobat" value="{{ $p->merkobat }}"> <br />
                Harga Obat <input type="text" required="required" name="hargaobat" value="{{ $p->hargaobat }}"> <br />
                Tersedia <input type="number" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br />
                Berat
                <textarea required="required" name="berat">{{ $p->berat }}</textarea> <br />-->
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
