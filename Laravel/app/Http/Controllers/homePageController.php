<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kendaraan;
use App\Lapor;
use Carbon\Carbon;

class homePageController extends Controller
{
    public function index(){
      $totalMotorG = $this->jumlahMotorGedungG();
      $totalMobilG = $this->jumlahMobilGedungG();
      $totalMotorH = $this->jumlahMotorGedungH();
      $totalMotorD = $this->jumlahMotorGedungD();
      $totalMotorE = $this->jumlahMotorGedungE();
      $totalMobilE = $this->jumlahMobilGedungE();
      $totalMotorC = $this->jumlahMotorGedungC();
      $totalMobilC = $this->jumlahMobilGedungC();
      $totalMotorLB= $this->jumlahLapanganBasket();

      $jumatan = $this->waktuJumatan();

      return view('homePage.konten.kuota',[
        'totalMotorG'  => $totalMotorG,
        'totalMobilG'  => $totalMobilG,
        'totalMotorH'  => $totalMotorH,
        'totalMotorD'  => $totalMotorD,
        'totalMotorE'  => $totalMotorE,
        'totalMobilE'  => $totalMobilE,
        'totalMotorC'  => $totalMotorC,
        'totalMobilC'  => $totalMobilC,
        'totalMotorLB' => $totalMotorLB,
        'waktu'        => $jumatan
      ]);
    }

    public function laporkan(Request $request){
      $lapor = new Lapor();
      $lapor->namaPelapor = $request->nama;
      $lapor->noHP        = $request->noHP;
      $lapor->judulLapor  = $request->judul;
      $lapor->pesanLapor  = $request->pesan;
      $lapor->save();
      return back();
    }

    public function waktuJumatan(){
      $date = Carbon::now();
      if($date->format('l') == "Tuesday"){
        if($date->hour >= 8 && ($date->hour <= 13 && $date->minute <30)){
          return 1;
        }
      }
      else{
        return 0;
      }
    }

    public function jumlahMotorGedungG(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','G')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }

    public function jumlahMobilGedungG(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','G')
              ->where('tipeKendaraan','MOBIL');
      $total= $data->count();
      return $total;
    }

    public function jumlahMotorGedungH(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','H')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }

    public function jumlahMotorGedungD(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','D')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }

    public function jumlahMotorGedungE(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','E')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }

    public function jumlahMobilGedungE(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','E')
              ->where('tipeKendaraan','MOBIL');
      $total= $data->count();
      return $total;
    }

    public function jumlahMotorGedungC(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','C')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }

    public function jumlahMobilGedungC(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','C')
              ->where('tipeKendaraan','MOBIL');
      $total= $data->count();
      return $total;
    }

    public function jumlahLapanganBasket(){
      $data = Kendaraan::where('kondisi',0)
              ->where('gedung','LB')
              ->where('tipeKendaraan','MOTOR');
      $total= $data->count();
      return $total;
    }
}
