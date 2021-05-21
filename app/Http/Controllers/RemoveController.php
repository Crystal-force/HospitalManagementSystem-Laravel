<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\PatientData;

class RemoveController extends Controller
{
    public function remove(Request $request) {
      $id  = $request->id;
      $res = PatientData::where('id', $id)->delete();
      if($res == 1) {
        $state = 1;
        return response() -> json(['data' => $state]);
      }
    }
}
