<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersService extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
    ];

    public function user(){
        return User::find($this->user_id);
    }

    public function service(){
        return Service::find($this->service_id);
    }
}
