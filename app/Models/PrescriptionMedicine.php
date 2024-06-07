<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'generic_id', 'generic_dose_id', 'prescription_id'
    ];

    public function generic()
    {
        return $this->belongsTo(Generic::class);
    }

    public function genericDose()
    {
        return $this->belongsTo(GenericDose::class);
    }
}
