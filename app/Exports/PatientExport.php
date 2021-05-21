<?php

namespace App\Exports;

use App\Models\PatientData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;


class PatientExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $date = date("Y/m/d");
        return PatientData::select('name', 'birthday','gender','phone','email','address','language','provider','medicalnum','medicalrelease','test','exam','state','code','second_code','firstsign','secondsign')->where('date', $date)->get();
    }
    public function headings(): array
    {
        return [
            'Name',
            'Birthday',
            'Gender',
            'Phone',
            'Email',
            'Address',
            'Language',
            'Provider',
            'MedicalNum',
            'MedicalRelease',
            'Test',
            'Exam',
            'Result',
            'Code',
            'Second Code',
            'FirstSign',
            'SecondSign',
        ];
    }
}
