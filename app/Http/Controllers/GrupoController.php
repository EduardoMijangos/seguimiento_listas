<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\colmenas; // Asegúrate de importar el modelo Colmena
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    // Mostrar todos los grupos
    public function index()
{
    $grupos = Grupo::with('colmena')->get(); // Usa la relación para obtener colmenas
    return view('grupos.index', compact('grupos'));
}


    // Mostrar el formulario para crear un nuevo grupo
    public function create()
    {
        // Obtener todas las colmenas de la base de datos
        $colmenas = colmenas::all(); 

        // Pasar las colmenas a la vista
        return view('grupos.create', compact('colmenas'));
    }

    // Guardar un nuevo grupo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_grupo' => 'required|string|max:255',
            'colmena_id' => 'required|exists:colmenas,id', // Asegúrate de validar el colmena_id
        ]);

        Grupo::create($request->all());
        return redirect()->route('grupos.index')->with('success', 'Grupo creado exitosamente.');
    }

    // Mostrar un grupo específico
    public function show($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('grupos.show', compact('grupo'));
    }

    // Mostrar el formulario para editar un grupo existente
    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id); // Obtiene el grupo específico
        $colmenas = colmenas::all(); // Obtiene todas las colmenas para el dropdown
        return view('grupos.edit', compact('grupo', 'colmenas')); // Pasa ambas variables a la vista
    }

    // Actualizar un grupo en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_grupo' => 'required|string|max:255',
        ]);

        $grupo = Grupo::findOrFail($id);
        $grupo->update($request->all());
        return redirect()->route('grupos.index')->with('success', 'Grupo actualizado exitosamente.');
    }

    // Eliminar un grupo
    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return redirect()->route('grupos.index')->with('success', 'Grupo eliminado exitosamente.');
    }
}
