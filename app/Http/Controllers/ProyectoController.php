<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use Barryvdh\DomPDF\Facade\Pdf;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listado paginado de proyectos y render de la vista principal
        $proyectos = Proyecto::latest()->paginate(10);
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar formulario de creación
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y guardar
        $data = $request->validate([
            'NombreProyecto' => ['required', 'string', 'max:255'],
            'fuenteFondos' => ['required', 'string', 'max:255'],
            'MontoPlanificado' => ['required', 'numeric', 'min:0'],
            'MontoPatrocinado' => ['required', 'numeric', 'min:0'],
            'MontoFondosPropios' => ['required', 'numeric', 'min:0'],
        ]);

        $proyecto = Proyecto::create($data);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        // Detalle de un proyecto
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        // Formulario de edición
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        // Validar y actualizar
        $data = $request->validate([
            'NombreProyecto' => ['required', 'string', 'max:255'],
            'fuenteFondos' => ['required', 'string', 'max:255'],
            'MontoPlanificado' => ['required', 'numeric', 'min:0'],
            'MontoPatrocinado' => ['required', 'numeric', 'min:0'],
            'MontoFondosPropios' => ['required', 'numeric', 'min:0'],
        ]);

        $proyecto->update($data);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }

    /**
     * Genera un PDF con el listado de proyectos.
     */
    public function generarPDF()
    {
        $proyectos = Proyecto::all();
        $pdf = Pdf::loadView('proyectos.pdf', compact('proyectos'))
            ->setPaper('a4', 'landscape');
        return $pdf->download('proyectos.pdf');
    }
}
