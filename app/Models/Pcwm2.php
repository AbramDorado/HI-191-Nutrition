<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcwm2 extends Model
{
    use HasFactory;
    protected $table = 'pcwm2';
    protected $primaryKey = 'pcwm2_id';

    protected $fillable = [
        'pcwm2_dt',
        'actual_weekly_weight',
        'loss',
        'gain',
        'is_archived',
        'patient_number',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_number', 'patient_number');
    }
}
