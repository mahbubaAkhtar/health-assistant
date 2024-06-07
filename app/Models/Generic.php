<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Generic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'strength', 'type'];

    public function genericDose(): HasOne
    {
        return $this->hasOne(GenericDose::class);
    }
}
