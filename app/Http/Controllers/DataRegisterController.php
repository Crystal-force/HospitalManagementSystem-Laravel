<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\PatientData;

class DataRegisterController extends Controller
{
    public function datasave(Request $request) {
      $name = $request->name;
      $birth = $request->birth;
      $gender = $request->gender;
      $phone = $request->phone;
      $email = $request->email;
      $address = $request->address;
      $language = $request->language;
      $provider = $request->provider;
      $medical = $request->medical;
      $check_one = $request->check_one;
      $check_two = $request->check_two;
      $check_three = $request->check_three;
      $date = $request->date;
      $category_id = $request->category;
      $code = 'null';
      $result = "null";
        
       if($request->sign_m == null) {
           $folderPath = public_path('signature/'); 
    	    $sign_p = explode(";base64,", $request->sign_p);	        
    	    $sign_p_type_aux = explode("image/", $sign_p[0]);	      
    	    $sign_p_type = $sign_p_type_aux[1];     
    	    $sign_p_image_base64 = base64_decode($sign_p[1]);
          $sign_p_name = uniqid().'.'.$sign_p_type;
    	    $sign_p_img = $folderPath.$sign_p_name;
          file_put_contents($sign_p_img, $sign_p_image_base64);
          $sign_m_name = "undefined";
          
       } else {
           $folderPath = public_path('signature/'); 
	    $sign_p = explode(";base64,", $request->sign_p);	        
	    $sign_p_type_aux = explode("image/", $sign_p[0]);	      
	    $sign_p_type = $sign_p_type_aux[1];     
	    $sign_p_image_base64 = base64_decode($sign_p[1]);
      $sign_p_name = uniqid().'.'.$sign_p_type;
	    $sign_p_img = $folderPath.$sign_p_name;
      file_put_contents($sign_p_img, $sign_p_image_base64);
      
      $sign_m = explode(";base64,", $request->sign_m);	        
	    $sign_m_type_aux = explode("image/", $sign_m[0]);	      
	    $sign_m_type = $sign_m_type_aux[1];     
	    $sign_m_image_base64 = base64_decode($sign_m[1]);
      $sign_m_name = uniqid().'.'.$sign_m_type;
	    $sign_m_img = $folderPath . $sign_m_name;
      file_put_contents($sign_m_img, $sign_m_image_base64);
       }
      
       $do_insurance_certificate = 0;
       if($request->do_insurance_certificate == 'true') {
        $do_insurance_certificate = 1;
       }

      $user = array(
        'name' => $request->name,
        'birthday'=> $request->birth,
        'gender'=>$request->gender,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address,
        'language' => $request->language,
        'provider' => $request->provider,
        'medicalnum'  => $request->medical,
        'medicalrelease'=> $request->check_one,
        'test'=>$request->check_two,
        'exam'=>$request->check_three,
        'state'=>$result,
        'code'=>$code,
        'date'=>$request->date,
        'category_id'=>$category_id,
        'firstsign'=>$sign_p_name,
        'secondsign'=>$sign_m_name,
        'front_driving_licence_document'=>$request->front_driving_licence_document,
        'rear_driving_licence_document'=>$request->rear_driving_licence_document,
        'front_licence_certificate_document'=>$request->front_licence_certificate_document,
        'rear_licence_certificate_document'=>$request->rear_licence_certificate_document,
        'do_insurance_certificate' => $do_insurance_certificate
      );
     
      $res = PatientData::create($user);
    
      if($res == true) {
        $state = 1;
        return response() -> json(['data' => $state]);
      }
     
    }
}
