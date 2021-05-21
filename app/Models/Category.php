<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'id',
        'name'
    ];

    public function patient_data() {
      return $this->hasMany('App\Models\PatientData');
    }
}
