<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_grupo', 
        'colmena_id', 
        'presidenta_id', 
        'tesorera_id'
    ];

    // Relación con colmena
    public function colmena()
    {
        return $this->belongsTo(colmenas::class);
    }

    // Relación con socias del grupo
    public function socias()
    {
        return $this->hasMany(Socia::class);
    }

    // Relación con la presidenta del grupo
    public function presidenta()
    {
        return $this->belongsTo(Socia::class, 'presidenta_id');
    }

    // Relación con la tesorera del grupo
    public function tesorera()
    {
        return $this->belongsTo(Socia::class, 'tesorera_id');
    }
}
