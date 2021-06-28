<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocationalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'borndate',
        'address',
        'number',
        'neighborhood',
        'city',
        'state',
        'father_name',
        'father_age',
        'father_alive',
        'father_profession',
        'mother_name',
        'mother_age',
        'mother_alive',
        'mother_profession',
        'total_brothers',
        'total_sisters',
        'family_economic_situation',
        'family_praying_together',
        'parents_religion',
        'family_description',
        'live_description',
        'health_description',
        'study_description',
        'social_description',
        'praying_description',
        'priest_desire_description',
        'missionary_description',
        'baptized',
        'first_eucharist',
        'chrism',
        'notes',
    ];
}
