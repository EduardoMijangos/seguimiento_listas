<?php

namespace App\Http\Controllers;

use App\Models\socia;
use App\Models\grupo;
use App\Models\colmenas;
use Illuminate\Http\Request;

class SociaController extends Controller
{
    // Mostrar todas las socias
    public function index()
    {
        $socias = socia::all();
        return view('socias.index', compact('socias'));
    }

    // Mostrar el formulario para crear una nueva socia
    public function create()
    {
        $grupos = grupo::all(); // Recupera todos los grupos
        $colmenas = colmenas::all(); // Recupera todas las colmenas
        return view('socias.create', compact('grupos', 'colmenas')); // Pasa las variables a la vista
    }

    // Guardar una nueva socia en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre1' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'grupo_id' => 'required|exists:grupos,id', // Validación del grupo
            'colmena_id' => 'required|exists:colmenas,id', // Validación de la colmena
        ]);

        Socia::create($request->all());
        return redirect()->route('socias.index')->with('success', 'Socia creada exitosamente.');
    }

    // Mostrar una socia específica
    public function show($id)
    {
        $socia = socia::findOrFail($id);
        return view('socias.show', compact('socia'));
    }

    // Mostrar el formulario para editar una socia existente
    public function edit($id)
    {
        $socia = socia::findOrFail($id);
        return view('socias.edit', compact('socia'));
    }

    // Actualizar una socia en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre1' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
        ]);

        $socia = socia::findOrFail($id);
        $socia->update($request->all());
        return redirect()->route('socias.index')->with('success', 'Socia actualizada exitosamente.');
    }

    // Eliminar una socia
    public function destroy($id)
    {
        $socia = socia::findOrFail($id);
        $socia->delete();
        return redirect()->route('socias.index')->with('success', 'Socia eliminada exitosamente.');
    }
}
