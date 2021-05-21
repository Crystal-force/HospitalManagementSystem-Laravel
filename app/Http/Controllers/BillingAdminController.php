<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use\App\Models\PatientData;

class BillingAdminController extends Controller
{
    public function login()
    {
    	if(\Session::get('billing-login')) {
    		return redirect()->route('billing-admin.list');
    	}

    	return view('billing-admin.login');
    }

    public function loginPost(Request $request) {
    	if($request->email == 'biller@consultancy360.co.uk' && $request->password == 'biller') {
    		\Session::put('billing-login', 'crystal');
    		return redirect()->route('billing-admin.list');
    	}
    	\Session::flash('message', 'Invalid Login!'); 
    	return redirect()->route('billing-admin.login');
    }

    public function list() {
    	if(\Session::get('billing-login')) {
    		$all_data = PatientData::whereStatus(1)->orderBy('id', 'DESC')->get();
    		return view('billing-admin.list', ['all_data' => $all_data]);
    	}
    	\Session::flash('message', 'Please Login!'); 
    	return redirect()->route('billing-admin.login');
    }

    public function logout() {
    	\Session::forget('billing-login');
    	return redirect()->route('billing-admin.login');
    }

    public function makeBilled(Request $request) {
    	$PatientData = PatientData::find($request->id);
    	$PatientData->billed = ($PatientData->billed == 1) ? 0 : 1;
    	$PatientData->save();
    	$status = ($PatientData->billed == 1) ? 'Billed' : 'Unpaid';
    	return response()->json(['status' => 200, 'msg'=> 'Marked as '.$status]);
    }
}