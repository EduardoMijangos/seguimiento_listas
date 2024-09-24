<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamicModel extends Model
{
    // Conexión de producción
    protected $connection = 'produccion'; // Aquí usamos la conexión a la base de producción

    // Desactivar timestamps si no los usas en todas las tablas
    public $timestamps = false;

    // Método para establecer la tabla dinámicamente
    public function setTableName($tableName)
    {
        $this->table = $tableName;
        return $this;
    }

    // Método estático para instanciar el modelo con una tabla específica
    public static function forTable($tableName)
    {
        $instance = new static();
        return $instance->setTableName($tableName);
    }
}
