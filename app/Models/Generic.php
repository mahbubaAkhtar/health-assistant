<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Generic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'strength', 'type', 'required_with_generic_id'];

    public function genericDose(): HasOne
    {
        return $this->hasOne(GenericDose::class);
    }

    public function requiredGeneric(): BelongsTo
    {
        return $this->belongsTo(Generic::class, 'required_with_generic_id');
    }
}
