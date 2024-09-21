<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',                     // Nombre de la socia
        'colmena',                    // Nombre de la colmena (Sucursal)
        'fecha_entrega',              // Fecha de entrega del crédito
        'proposito',                  // Propósito del crédito
        'ciclo',                      // Ciclo del crédito
        'plazo',                      // Plazo del crédito
        'credito',                    // Cantidad del crédito
        'aportacion_social',          // Aportación social
        'abono',                      // Abono semanal
        'saldo_credito',              // Saldo del crédito
        'creditos_otorgados',         // Créditos otorgados
        'semana_credito',             // Crédito por semana
        'semana_aportacion_social',   // Aportación social por semana
        'total_recuperado_credito',   // Total recuperado de crédito
        'total_recuperado_aportacion',// Total recuperado de aportación social
        'saldo_final',                // Saldo final del crédito
        'estatus'                     // Estatus de la prestaria (calificación)
    ];

    // Si se necesita agregar relaciones entre tablas (dependiendo de tu base de datos y estructura),
    // puedes agregarlas aquí, por ejemplo, si un crédito pertenece a una socia o a una sucursal.
}
