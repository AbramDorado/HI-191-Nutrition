<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitialResuscitation extends Model
{
    use HasFactory;
    protected $table = 'initial_resuscitations';
    protected $primaryKey = 'initial_resuscitation_id';

    public function codeBlueActivation()
    {
        return $this->belongsTo(codeBlueActivation::class);
    }
}
