<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['symptom_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }
}
