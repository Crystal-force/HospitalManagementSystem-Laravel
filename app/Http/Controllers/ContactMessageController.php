<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use\App\Models\PatientData;




class ContactMessageController extends Controller
{
    public function contact(Request $request)
    {
      $id = $request->id;
      $user = PatientData::where('id', $id)->first();
      $phone = str_replace(" ", "", "1".ltrim($user->phone, '0'));
      $state = $request->state;
     
      $status = ($state == 'Negative') ? 1 : 0;

      PatientData::where('id', $id)
       ->update([
           'state' => $state,
           'status' => $status
        ]);

      if(!empty($state)) {
        if($state == 'Negative') {
          $message = 'HI '.ucfirst($user->name).', your covid test taken on date '.$user->date.' was NEGATIVE kind regards';
        } else {
          $message = 'Hi '.ucfirst($user->name).', your covid test was POSITIVE please report back the the Medical Asistant IMMEDIATLY';
        }
      } else {
        return response()->json(['status' => 302, 'message'=> 'Please choose all fields and then submit']);
      }

      $response = file_get_contents('https://platform.clickatell.com/messages/http/send?apiKey=vRp820G0QlmJ9gvvYJy6GQ==&to='.$phone.'&from=13468164338&content='.urlencode($message).'&clientMessageId');
      $result = json_decode($response);
      
      if(!empty($result->messages)) {
        if(!empty($result->messages[0]->apiMessageId)) {
          return response()->json(['status' => 200, 'data'=> $response]);
        } else {
          return response()->json(['status' => 302, 'msg'=> $result->messages[0]->errorDescription]);
        }
      } else {
        return response()->json(['status' => 302, 'msg'=> $result->messages[0]->errorDescription]);
      }
      
      
      // // $this->validate($request, [
      // //   'name' => 'required',
      // //   'email' => 'required|email',
      // //   'subject' => 'required',
      // //   'message' => 'required',
      // //   'g-recaptcha-response' => new Captcha(),
      // // ]);

      // Mail::send('email.contact-message', [
      //   'msg' => $request->state
      // ], function ($mail) use ($useremail) {
      //   $mail->from('admin@consultancy360.com', 'consultancy360');

      //   $mail->to($useremail->email)->subject('Contact Message');
      // });



      // return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
