<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soap extends Model
{
    use HasFactory;
    protected $table = 'soap';
    protected $primaryKey = 'soap_id';

    protected $fillable = [
        'soap_dt',
        'subjective',
        'bp',
        'pr',
        'rr',
        'temp',
        'height',
        'weight',
        'bmi_1',
        'ecg',
        'cxr',
        'cbc',
        'u/a',
        'crea',
        'bun',
        'bua',
        'lipid_profile',
        'sgot',
        'sgpt',
        'fbs',
        'nark',
        'hbalic',
        'hepabs',
        'others',
        'assessment',
        'plan',
        'is_archived',
        'patient_number',  
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_number', 'patient_number');
    }
}
