<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'image_url',
        'video_url',
    ];

     // Utilise un mutateur pour convertir la chaîne de date en objet Carbon
     public function setDateAttribute($value)
     {
         $this->attributes['date'] = Carbon::parse($value);
     }
 
     // Utilise un accesseur pour renvoyer la date au format souhaité
     public function getDateAttribute($value)
     {
         return Carbon::parse($value)->format('Y-m-d H:i:s');
     }
 }