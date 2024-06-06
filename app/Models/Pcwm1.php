<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcwm1 extends Model
{
    use HasFactory;
    protected $table = 'pcwm1';
    protected $primaryKey = 'pcwm1_id';

    protected $fillable = [
        'patient_name_2',
        'age_3',
        'prescribe_exer',
        'target_weight_2',
        'target_date',
        'starting_weight',
        'weighing_day',
        'weighing_time',
        'is_archived',
        'patient_number',
    ];
    public $timestamps = true;

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_number', 'patient_number');
    }
}
