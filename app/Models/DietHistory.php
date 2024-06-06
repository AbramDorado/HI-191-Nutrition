<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietHistory extends Model
{
    use HasFactory;
    protected $table = 'diet_history';
    protected $primaryKey = 'diet_history_id';

    protected $fillable = [
        'diet_history_id',
        'diet_history_dt',
        'ht', 
        'wt', 
        'wasit_cir',
        'body_fat',
        'bmi_2',
        'dbw',
        'dbw_range',
        'case',
        'diet_rx',
        'food_recall_time',
        'where_eaten',
        'foods',
        'description',
        'amount',
        'food_taken',
        'food_taken_1',
        'exercise',
        'target_weight',
        'weight_loss',
        'total_energy_allowance',
        'vegetable_a',
        'vegetable_b',
        'fruit',
        'milk',
        'rice_cereal',
        'meat',
        'fat',
        'sugar',
        'is_archived',
        'patient_number',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_number', 'patient_number');
    }
}
