<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientData extends Model
{
    public $fillable = [
      'id',
      'name',
      'birthday',
      'gender',
      'phone',
      'email',
      'address',
      'language',
      'provider',
      'medicalnum',
      'medicalrelease',
      'firstsign',
      'test',
      'exam',
      'secondsign',
      'state',
      'code',
      'date',
      'category_id',
      'front_driving_licence_document',
      'rear_driving_licence_document',
      'front_licence_certificate_document',
      'rear_licence_certificate_document',
      'do_insurance_certificate'

    ];

    public function categorylist() {
      return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function covidcode() {
      return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
