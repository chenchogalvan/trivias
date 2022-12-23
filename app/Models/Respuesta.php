<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'trivia_id',
        'data',
    ];

    public function getDataAttribute($value)
    {
        return json_decode($value, true);
    }
}
