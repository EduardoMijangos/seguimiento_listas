<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colmenas extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_colmena', 
        'nombre_colmena', 
        'sucursal', 
        'presidenta_id', 
        'secretaria_id'
    ];

    // Relación con los grupos
    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    // Relación con la presidenta general
    public function presidenta()
    {
        return $this->belongsTo(Socia::class, 'presidenta_id');
    }

    // Relación con la secretaria general
    public function secretaria()
    {
        return $this->belongsTo(Socia::class, 'secretaria_id');
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
