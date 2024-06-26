<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabRequest extends Model
{
    use HasFactory;
    protected $table = 'lab_requests';
    protected $primaryKey = 'lab_request_id';

    protected $fillable = [
        'lab_request_id',
        'lab_request_dt',
        'patient_name_1',
        'age_2',
        'sex_2',
        'request',
        'others',
        'medical_officer',
        'license_num',
        'patient_number',
    ];

    public function patient()
    {
        return $this->belongsTo(PatientInformation::class, 'patient_number', 'patient_number');
    }

    
}