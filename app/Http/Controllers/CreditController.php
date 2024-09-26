<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\socia;
use App\Models\colmenas;
use App\Models\actividad;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    // Muestra una lista de todos los créditos
    public function index()
    {
        $credits = Credit::all();
        return view('credits.index', compact('credits'));
    }

    // Muestra el formulario para crear un nuevo crédito
    public function create()
    {
        // Obtener todas las socias y colmenas
        $socias = socia::all();
        $actividads = actividad::all();
        $colmenas = colmenas::all();

        // Retornar la vista con las variables necesarias
        return view('credits.create', compact('socias', 'colmenas', 'actividads'));
    }

    // Almacena un nuevo crédito
    public function store(Request $request)
{
    // Muestra todos los datos recibidos (solo para debugging)
    // dd($request->all());

    // Validar los datos del formulario
    $request->validate([
        'socia_id' => 'required|exists:socias,id',
        'colmena_id' => 'required|exists:colmenas,id',
        'fecha_entrega' => 'required|date',
        'proposito' => 'required|exists:actividads,id',
        'ciclo' => 'required|integer',
        'plazo' => 'required|integer',
        'credito' => 'required|numeric',
        'aportacion_social' => 'nullable|numeric', // Cambiado a nullable
        'abono' => 'required|numeric',
        'saldo_credito' => 'required|numeric',
        'creditos_otorgados' => 'required|integer',
        'total_recuperado_credito' => 'nullable|numeric', // Cambiado a nullable
        'total_recuperado_aportacion' => 'nullable|numeric', // Cambiado a nullable
        'saldo_final' => 'required|numeric',
        'estatus' => 'required|string',
    ]);

    try {
        // Crea el crédito utilizando los datos validados
        Credit::create($request->only([
            'socia_id',
            'colmena_id',
            'fecha_entrega',
            'proposito',
            'ciclo',
            'plazo',
            'credito',
            'aportacion_social',
            'abono',
            'saldo_credito',
            'creditos_otorgados',
            'total_recuperado_credito',
            'total_recuperado_aportacion',
            'saldo_final',
            'estatus',
        ]));

        return redirect()->route('credits.index')->with('success', 'Crédito creado con éxito');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Hubo un problema al crear el crédito: ' . $e->getMessage()]);
    }
}


    // Muestra los detalles de un crédito
    public function show($id)
    {
        $credit = Credit::find($id);
        return view('credits.show', compact('credit'));
    }

    // Muestra el formulario para editar un crédito
    public function edit($id)
{
    // Buscar el crédito por su ID
    $credit = Credit::findOrFail($id); // Usa findOrFail para manejar errores automáticamente
    $socias = socia::all();
    $colmenas = colmenas::all(); // Asegúrate de que el nombre del modelo sea correcto
    $actividads = actividad::all();

    return view('credits.edit', compact('credit', 'socias', 'colmenas', 'actividads'));
}

// Actualiza un crédito existente
public function update(Request $request, $id)
{
    // Validación de los campos
    $request->validate([
        'socia_id' => 'required|exists:socias,id',
        'colmena_id' => 'required|exists:colmenas,id',
        'fecha_entrega' => 'required|date',
        'proposito' => 'required|exists:actividads,id',
        'ciclo' => 'required|integer',
        'plazo' => 'required|integer',
        'credito' => 'required|numeric',
        'aportacion_social' => 'required|numeric',
        'abono' => 'required|numeric',
        'saldo_credito' => 'required|numeric',
        'creditos_otorgados' => 'required|integer',
        'total_recuperado_credito' => 'required|numeric',
        'total_recuperado_aportacion' => 'required|numeric',
        'saldo_final' => 'required|numeric',
        'estatus' => 'required|string',
    ]);

    // Buscar el crédito y actualizarlo
    $credit = Credit::findOrFail($id); // Usa findOrFail para manejar errores automáticamente
    $credit->update($request->all());

    return redirect()->route('credits.index')->with('success', 'Crédito actualizado con éxito');
}


    // Elimina un crédito
    public function destroy($id)
    {
        $credit = Credit::find($id);
        $credit->delete();

        return redirect()->route('credits.index')->with('success', 'Crédito eliminado con éxito');
    }
}
