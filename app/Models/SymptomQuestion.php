<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SymptomQuestion extends Model
{
    use HasFactory;

    protected $casts = [
        'input_options' => 'array',
        'dependent_concerns' => 'array'
    ];
}
