<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'description',
        'type',
        'visualized',
    ];

    public function user(){
        return User::find($this->user_id);
    }
}
