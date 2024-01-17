<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'car_number',
        'user_id',
        'status_id',
    ]

    public function get_status(){

        return $this->hasOne(Status::class);
    }

    public function get_user(){

        return $this->hasOne(User::class);
    }
}
