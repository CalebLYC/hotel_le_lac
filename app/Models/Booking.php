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

    public function user(){
        return $this->hasOne(User::class, 'id');
    }

    public function room(){
        return $this->hasOne(Room::class, 'id');
    }
}