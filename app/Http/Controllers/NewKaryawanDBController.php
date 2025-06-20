<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanDBController extends Controller
{
    public function index()
    {

        $newkaryawan = DB::table('newkaryawan')->get();
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }

// method untuk menampilkan view form tambah newkaryawan
    public function tambah(){
        // memanggil view tambah
        return view('tambahnewkaryawan');
    }

    // method untuk insert data ke table newkaryawan
public function store(Request $request)
{

    $request->validate([
    	'nip' => 'required|unique:newkaryawan,nip',
	], [
		'nip.required' => 'NIP tidak boleh kosong!',
		'nip.unique' => 'NIP sudah digunakan, silakan gunakan NIP lain'
	]);

	// insert data ke table newkaryawan
	DB::table('newkaryawan')->insert([
		'nip' => $request->nip,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman newkaryawan
	return redirect('/eas');

}

// method untuk hapus data newkaryawan
public function hapus($nip)
{

	DB::table('newkaryawan')
    ->where('NIP',$nip)
    ->delete();

	return redirect('/eas');
}

}

