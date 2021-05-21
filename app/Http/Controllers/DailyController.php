<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PatientExport;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReportMail;

class DailyController extends Controller
{ 
    public function dailyExcel() {
        $today = date('Y-m-d');
        return Excel::download(new PatientExport, 'Humacare Daily Report_'.$today.'.xlsx');
    }   

    public function sendReport() {
        return Mail::to('highdream1997@gmail.com')->send(new ReportMail());
    }
}
