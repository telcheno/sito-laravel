<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    //
    protected $fillable = [
        'id',
        'hora',
        'fecha',
        'estado',
        // Timestamps
        'created_at',
        'updated_at',
    ];
}
