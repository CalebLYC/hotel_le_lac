<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nbr_lits',
        'nbr_bains',
        'nbr_stars',
        'description',
        'prix',
        'image_url',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}