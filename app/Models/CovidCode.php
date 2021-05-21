<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CovidCode extends Model
{
      public $fillable = [
          'id',
          'name'
      ];

      public function patient_data() {
        return $this->hasMany('App\Models\PatientData');
      }
      public function patient_data_code() {
        return $this->hasMany('App\Models\PatientData');
      }
}
