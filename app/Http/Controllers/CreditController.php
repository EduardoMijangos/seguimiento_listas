<?php

namespace App\Http\Controllers;

use App\Models\Credit;
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
        return view('credits.create');
    }

    // Almacena un nuevo crédito
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'colmena' => 'required|string',
            'fecha_entrega' => 'required|date',
            'proposito' => 'required|string',
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

        Credit::create($request->all());

        return redirect()->route('credits.index')->with('success', 'Crédito creado con éxito');
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
        $credit = Credit::find($id);
        return view('credits.edit', compact('credit'));
    }

    // Actualiza un crédito existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'colmena' => 'required|string',
            'fecha_entrega' => 'required|date',
            'proposito' => 'required|string',
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

        $credit = Credit::find($id);
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
