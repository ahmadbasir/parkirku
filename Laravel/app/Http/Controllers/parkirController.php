<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kendaraan;

class parkirController extends Controller
{
    public function index(){
      $data = [
        'active'  => 1,
        'titleTop'=> 'Kendaraan Masuk',
      ];
      return view('panelAdmin.layanan.kendaraanMasuk', $data);
    }

    public function tambahKendaraan(Request $request){
      $input = new Kendaraan();
      $input->noPlat  = strtoupper($request->noPlat);
      $input->tipeKendaraan = $request->tipe;
      $input->gedung  = $request->gedung;
      $input->kondisi = 0;
      $input->save();
      return back();
    }

    public function keluar($id){
      $update = Kendaraan::findOrFail($id);
      $update->kondisi = 1;
      $update->save();
      return back();
    }

    public function daftarKendaraan(){
      $data = [
        'active'  => 2,
        'titleTop'=> 'Daftar Kendaraan',
        'list'    => Kendaraan::orderBy('created_at', 'desc')->get(),
      ];
      return view('panelAdmin.layanan.daftarKendaraan', $data);
    }
}
