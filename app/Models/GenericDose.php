<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenericDose extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'from_value', 'to_value', 'dose', 'duration'];
}
