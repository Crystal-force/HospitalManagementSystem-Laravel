<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\PatientData;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index() {
        $all_user = PatientData::orderBy('id', 'DESC')->get();
        
        return view('userlist')->with([
          'userlist' => $all_user,
          'usercount' =>count($all_user)
        ]);
    }

    public function todayuser() {
      $today = date("Y/m/d");

      $today_user = PatientData::where('date', $today)->get();
       return view('todayuser')->with([
         'touser'=>$today_user,
         'tocount'=>count($today_user)
       ]);
    }
}
