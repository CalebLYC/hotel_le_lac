<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'checkin_date',
        'checkout_date',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}