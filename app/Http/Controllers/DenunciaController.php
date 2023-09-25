<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Denunciante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denuncias = Denuncia::all();
        return view('admin.denuncias.index', compact('denuncias'));
        //
    }

    public function pdf($id)
    {    
        $denuncia = Denuncia::find($id);  
        $pdf = Pdf::loadView('admin.denuncias.pdf',compact('denuncia'));
        return $pdf->stream();        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $denuncias = new Denuncia;
        $denuncias->dni = $request->input('dni');
        $denuncias->nombre = $request->input('nombre');
        $denuncias->telefono = $request->input('telefono');
        $denuncias->correo = $request->input('correo');
        $denuncias->denunciado = $request->input('denunciado');
        $denuncias->institucion = $request->input('institucion');
        $denuncias->cargo = $request->input('cargo');
        $denuncias->fecha = $request->input('fecha');
        $denuncias->descripcion = $request->input('descripcion');
        $denuncias->testigos = $request->input('testigos');
        $denuncias->save();

        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
