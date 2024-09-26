<?php

namespace App\Http\Controllers;

use App\Models\colmenas;
use Illuminate\Http\Request;

class ColmenasController extends Controller
{
    // Mostrar todas las colmenas
    public function index()
    {
        $colmenas = colmenas::all();
        return view('colmenas.index', compact('colmenas'));
    }

    // Mostrar el formulario para crear una nueva colmena
    public function create()
    {
        return view('colmenas.create');
    }

    // Guardar una nueva colmena en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_colmena' => 'required|string|max:255',
            'sucursal' => 'required|string|max:255',
        ]);

        colmenas::create($request->all());
        return redirect()->route('colmenas.index')->with('success', 'Colmena creada exitosamente.');
    }

    // Mostrar una colmena específica
    public function show($id)
    {
        $colmena = colmenas::findOrFail($id);
        return view('colmenas.show', compact('colmena'));
    }

    // Mostrar el formulario para editar una colmena existente
    public function edit($id)
    {
        $colmena = colmenas::findOrFail($id);
        return view('colmenas.edit', compact('colmena'));
    }

    // Actualizar una colmena en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'sucursal' => 'required|string|max:255',
        ]);

        $colmena = colmenas::findOrFail($id);
        $colmena->update($request->all());
        return redirect()->route('colmenas.index')->with('success', 'Colmena actualizada exitosamente.');
    }

    // Eliminar una colmena
    public function destroy($id)
    {
        $colmena = colmenas::findOrFail($id);
        $colmena->delete();
        return redirect()->route('colmenas.index')->with('success', 'Colmena eliminada exitosamente.');
    }
}
