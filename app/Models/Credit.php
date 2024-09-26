<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'socia_id',                   // ID de la socia (relación)
        'colmena_id',                 // ID de la colmena (relación)
        'fecha_entrega',              // Fecha de entrega del crédito
        'proposito',                  // Propósito del crédito (ID de actividad)
        'ciclo',                      // Ciclo del crédito
        'plazo',                      // Plazo del crédito
        'credito',                    // Cantidad del crédito
        'aportacion_social',          // Aportación social
        'abono',                      // Abono semanal
        'saldo_credito',              // Saldo del crédito
        'creditos_otorgados',         // Créditos otorgados
        'total_recuperado_credito',   // Total recuperado de crédito
        'total_recuperado_aportacion',// Total recuperado de aportación social
        'saldo_final',                // Saldo final del crédito
        'estatus'                     // Estatus de la prestaria (calificación)
    ];

    // Relación con la tabla socias
    public function socia()
    {
        return $this->belongsTo(Socia::class, 'socia_id', 'id'); // Relación correcta
    }

    // Relación con la tabla colmenas
    public function colmena()
    {
        return $this->belongsTo(colmenas::class, 'colmena_id', 'id'); // Ajusta 'colmena_id' según tu esquema
    }

    // Relación con la tabla actividades
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'proposito', 'id'); // 'proposito' debe ser el campo que almacena la relación
    }
}
