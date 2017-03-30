<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kendaraan;
use App\Lapor;
use App\Http\Controllers\homePageController;
use Validator;
use Session;

class parkirController extends Controller
{
    public function __construct(){
      if(Session::has('admin')){
        return redirect()->route('adminPanel');
      }
      else{
        return redirect()->route('login');
      }
    }

    public function index(){
      $data = [
        'active'  => 1,
        'titleTop'=> 'Kendaraan Masuk',
        'sisa'  => $this->sisaKendaraan()
      ];
      return view('panelAdmin.layanan.kendaraanMasuk', $data);
    }

    public function sisaKendaraan(){
      $data = new homePageController();
      $motorG = 200 - $data->jumlahMotorGedungG();
      $mobilG = 35 - $data->jumlahMobilGedungG();
      $motorH = 200 - $data->jumlahMotorGedungH();
      $motorD = 100 - $data->jumlahMotorGedungD();
      $motorE = 300 - $data->jumlahMotorGedungE();
      $mobilE = 50 - $data->jumlahMobilGedungE();
      $motorC = 100 - $data->jumlahMotorGedungC();
      $mobilC = 25 - $data->jumlahMobilGedungC();
      $LB     = 250 - $data->jumlahLapanganBasket();

      $sisa = [
        "motorG" => $motorG,
        "mobilG" => $mobilG,
        "motorH" => $motorH,
        "motorD" => $motorD,
        "motorE" => $motorE,
        "mobilE" => $mobilE,
        "motorC" => $motorC,
        "mobilC" => $mobilC,
        "LB"     => $LB
      ];
      return $sisa;
    }

    public function tambahKendaraan(Request $request){
      $validator = Validator::make($request->all(),[
        'noPlat'  => 'required|unique:kendaraans'
      ]);
      if($validator->fails()){
        return back()
              ->with('tab', $request->gedung)
              ->withInput()
              ->withErrors($validator);
      }

      $input = new Kendaraan();
      $input->noPlat  = strtoupper($request->noPlat);
      $input->tipeKendaraan = $request->tipe;
      $input->gedung  = $request->gedung;
      $input->kondisi = 0;
      $input->save();
      return back()->with('tab',$request->gedung);
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

    public function viewEditKendaraan($id){
      $data = [
        'active'  => 2,
        'titleTop'=> 'Daftar Kendaraan',
        'edit'    => Kendaraan::findOrFail($id),
      ];
      return view('panelAdmin.layanan.editStatusKendaraan', $data);
    }

    public function editKendaraan(Request $request, $id){
      $update = Kendaraan::findOrFail($id);
      $update->noPlat = $request->noPlat;
      $update->tipeKendaraan = $request->tipe;
      $update->gedung = $request->gedung;
      $update->save();
      return redirect()->route('adminListParkir');
    }

    public function daftarLapor(){
      $data = [
        'active'  => 3,
        'titleTop'=> 'Daftar Lapor',
        'list'    => Lapor::orderBy('created_at', 'desc')->get(),
      ];

      return view('panelAdmin.layanan.lapor', $data);
    }

    public function panduanPARKIRKU(){
      $data = [
        'active'  => 4,
        'titleTop'=> 'Panduan PARKIRKU'
      ];

      return view('panelAdmin.layanan.panduan', $data);
    }

}
