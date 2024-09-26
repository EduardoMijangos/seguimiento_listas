<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    // Mostrar todas las actividades
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    // Mostrar el formulario para crear una nueva actividad
    public function create()
    {
        return view('actividades.create');
    }

    // Guardar una nueva actividad en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'actividad_economica' => 'required|string|max:255',
        ]);

        Actividad::create($request->all());
        return redirect()->route('actividades.index')->with('success', 'Actividad creada exitosamente.');
    }

    // Mostrar una actividad específica
    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        return view('actividades.show', compact('actividad'));
    }

    // Mostrar el formulario para editar una actividad existente
    public function edit($id)
    {
        $actividad = Actividad::findOrFail($id);
        return view('actividades.edit', compact('actividad'));
    }

    // Actualizar una actividad en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'actividad_economica' => 'required|string|max:255',
        ]);

        $actividad = Actividad::findOrFail($id);
        $actividad->update($request->all());
        return redirect()->route('actividades.index')->with('success', 'Actividad actualizada exitosamente.');
    }

    // Eliminar una actividad
    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();
        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada exitosamente.');
    }
}
