<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\PatientData;
use\App\Models\CovidCode;
use\App\Models\Category;

class ShowController extends Controller
{
    public function infomationshow(Request $request) {
      
      $id = $request->id;
      $info = PatientData::where('id', $id)->first();
      $code = CovidCode::orderBy('id', 'DESC')->get();
      
      return view('showinfomatio')->with([
        'userinfo'=>$info,
        'code'=>$code
      ]);
    }


    public function patientinfo(Request $request) {
      $id = $request->id;
      $patientinfo = PatientData::with('categorylist')->where('id', $id)->first();
      $categoryname = Category::where('id', $patientinfo->category_id)->first('name');
      
      return view('patientinfo')->with([
        'patientinfo'=>$patientinfo,
        'category'=>$categoryname
      ]);
    }









    public function updatestate(Request $request) {
      $id = $request->id;
      // $state = $request->state;
      $code = $request->code;
      
      if($code == "undefined") {
        $code_name = CovidCode::where('id', $code)->first();
        $res = PatientData::where('id', $id)->update(array('code'=>$code_name->name));
      } else {
        $code_name = CovidCode::where('id', $code)->first();
        // $second_code_name = CovidCode::where('id', $second)->first();
        $res = PatientData::where('id', $id)->update(array('code'=>$code_name->name) );
      }
      
      if($res == 1) {
        return response()->json(['data'=> '1']);
      }
    }

    public function savesecondstate(Request $request) {
      $id = $request->id;
      $second = $request->second_code;
      
      if($second == "undefined") {
        $res = PatientData::where('id', $id)->update(array('second_code'=>"undefined"));
      }
      else{
        $code = CovidCode::where('id', $second)->first();
        $res = PatientData::where('id', $id)->update(array('second_code' => $code->name ));
      }
      if($res == 1) {
        return response()->json(['data'=> '1']);
      }      
    }

}
