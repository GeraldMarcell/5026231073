<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table obat
    	//$obat = DB::table('obat')->get(); //all records in array
        $obat = DB::table('obat')->paginate(10);
    	// mengirim data obat ke view index
    	return view('indexobat',['obat' => $obat]);
    }

    // method untuk menampilkan view form tambah obat
    public function tambah(){
        // memanggil view tambah
        return view('tambahobat');
    }

    // method untuk insert data ke table obat
public function store(Request $request)
{
	// insert data ke table obat
	DB::table('obat')->insert([
		'merkobat' => $request->merkobat,
		'hargaobat' => $request->hargaobat,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman obat
	return redirect('/obat');

}

// method untuk edit data obat
public function edit($id)
{
	// mengambil data obat berdasarkan id yang dipilih
	$obat = DB::table('obat')
    ->where('obat_id',$id) // Khusus tanda =
    ->get();
	// passing data obat yang didapat ke view edit.blade.php
	return view('editobat',['obat' => $obat]);

}

// update data obat
public function update(Request $request)
{
	// update data obat
	DB::table('obat')->where('obat_id',$request->obat_id)
    ->update([
		'merkobat' => $request->merkobat,
		'hargaobat' => $request->hargaobat,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman obat
	return redirect('/obat');
}

// method untuk hapus data obat
public function hapus($id)
{
	// menghapus data obat berdasarkan id yang dipilih
	DB::table('obat')
    ->where('obat_id',$id)
    ->delete();

	// alihkan halaman ke halaman obat
	return redirect('/obat');
}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table obat sesuai pencarian data
		$obat = DB::table('obat')
		->where('merkobat','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data obat ke view index
		return view('indexobat',['obat' => $obat]);

	}
}
