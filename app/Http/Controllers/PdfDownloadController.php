<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\PatientData;
use\App\Models\CovidCode;
use\App\Models\Category;
use Dompdf;
use PDF;
use Mail;

class PdfDownloadController extends Controller
{
    public function downloadPDF($id) {
      $data = PatientData::find($id);
      $category_name = Category::where('id', $data->category_id)->first('name');
      // dd($data);
      $pdf = PDF::loadView('myPDF', compact('data',  'category_name'));
      return $pdf->download('personal-information.pdf');
    }

    public function sendpdfemail(Request $request) {
      $data["email"] = "yabjinskaya2020@gmail.com";

      $data["title"] = "Welcome";

      $data["body"] = "This is Patient Information";

      $data = PatientData::find($request->id);
      
      $category_name = Category::where('id', $data->category_id)->first('name');
      $pdf = PDF::loadView('emails.myTestMail', compact('data',  'category_name'));

        Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {

            $message->to($data["email"], $data["email"])

                    ->subject($data["title"])

                    ->attachData($pdf->output(), "personal-information.pdf");

        });
        
    }
}
