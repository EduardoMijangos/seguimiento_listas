<?php

namespace App\Http\Controllers;

use App\Models\DynamicModel;
use Illuminate\Http\Request;

class DataController extends Controller
{
    // Obtener todos los registros de la tabla 'acreditado' del esquema 'public'
    public function getAcreditados()
    {
        $acreditados = DynamicModel::forTable('acreditado')->get();
        return response()->json($acreditados);
    }

    // Obtener todos los registros de la tabla 'personas' del esquema 'personas'
    public function getPersonas()
    {
        $personas = DynamicModel::forTable('personas.personas')->get();
        return response()->json($personas);
    }

    // Obtener todos los registros de la tabla 'actividad_principal' del esquema 'actividades'
    public function getActividades()
    {
        $actividades = DynamicModel::forTable('actividades.actividad_principal')->get();
        return response()->json($actividades);
    }

    // Obtener todos los registros de una tabla del esquema 'ama'
    public function getAmaDetalle()
    {
        $amaDetalle = DynamicModel::forTable('ama.detalles')->get();
        return response()->json($amaDetalle);
    }

    // Obtener todos los registros de una tabla del esquema 'fin'
    public function getFinDetalle()
    {
        $finDetalle = DynamicModel::forTable('fin.detalle_fin')->get();
        return response()->json($finDetalle);
    }

    // Obtener todos los registros de una tabla del esquema 'ban'
    public function getBanMovimiento()
    {
        $banMovimiento = DynamicModel::forTable('ban.movimientos')->get();
        return response()->json($banMovimiento);
    }

    // Obtener todos los registros de una tabla del esquema 'imp'
    public function getImpDetalle()
    {
        $impDetalle = DynamicModel::forTable('imp.detalles')->get();
        return response()->json($impDetalle);
    }

    // Obtener todos los registros de una tabla del esquema 'col'
    public function getColDetalle()
    {
        $colDetalle = DynamicModel::forTable('col.detalles')->get();
        return response()->json($colDetalle);
    }
}
