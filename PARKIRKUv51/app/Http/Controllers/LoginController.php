<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class LoginController extends Controller
{
    public function index(){
      return view('login.login');
    }

    public function loginParkirku(Request $request){

      if($request->nama == "admin" && $request->pass == "admin"){
        Session::put('admin','true');
        return redirect()->route('adminPanel');
      }
      else{
        return back();
      }
    }

    public function logout(){
      Session::flush();
      return redirect()->route('login');
    }
}
