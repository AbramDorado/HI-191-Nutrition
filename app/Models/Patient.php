<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patient'; 
    protected $primaryKey = 'patient_number'; 

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'sex',
        'civil staus',
        'birthday',
        'age_1',
        'allergies',
        'position',
        'unit_assignment',
        'home_address',
        'bachelor_degree',
        'blood_type',
        'religion',
        'contact_number',
        'referral_control_num',
        'general_appearance',
        'skin',
        'heent',
        'neck',
        'chest',
        'heart',
        'breast',
        'abdomen',
        'musculoskeletal',
        'neurologic',
        'past_medical_history',
        'previous_hospitalization',
        'blood_transfusion',
        'current_medication',
        'obstetric_score',
        'lmp',
        'menarche',
        'family_history',
        'psychosocial_history',
        'is_archived',
        'is_finalized',
    ];

    public function soap()
    {
        return $this->hasOne(Soap::class, 'patient_number', 'patient_number');
    }

    public function labRequest()
    {
        return $this->hasOne(LabRequest::class, 'patient_number', 'patient_number');
    }
    
    public function dietHistory()
    {
        return $this->hasOne(DietHistory::class, 'patient_number', 'patient_number');
    }
    
    public function pcwm1()
    {
        return $this->hasOne(Pcwm1::class, 'patient_number', 'patient_number');
    }
    
    public function pcwm2()
    {
        return $this->hasOne(Pcwm2::class, 'patient_number', 'patient_number');
    }

}
