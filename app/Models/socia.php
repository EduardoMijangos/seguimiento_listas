<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socia extends Model // Cambié el nombre de la clase a 'Socia' con mayúscula para seguir las convenciones de nomenclatura
{
    use HasFactory;

    protected $fillable = [
        'nombre1', 
        'nombre2', 
        'apellido_paterno', 
        'apellido_materno', 
        'grupo_id'
    ];

    // Relación con grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    // Relación con colmena como presidenta o secretaria
    public function colmenaPresidenta()
    {
        return $this->hasOne(colmenas::class, 'presidenta_id');
    }

    public function colmenaSecretaria()
    {
        return $this->hasOne(colmenas::class, 'secretaria_id');
    }

    // Relación con grupo como presidenta o tesorera
    public function grupoPresidenta()
    {
        return $this->hasOne(Grupo::class, 'presidenta_id');
    }

    public function grupoTesorera()
    {
        return $this->hasOne(Grupo::class, 'tesorera_id');
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    // Método para obtener el nombre completo
    public function getNombreCompletoAttribute()
    {
        return trim("{$this->nombre1} {$this->nombre2} {$this->apellido_paterno} {$this->apellido_materno}");
    }
}
