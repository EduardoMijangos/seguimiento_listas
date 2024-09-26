<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;

    protected $fillable = ['actividad_economica'];

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
