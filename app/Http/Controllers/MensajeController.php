<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = Mensaje::all();
        return view('admin.mensajes.index', compact('mensajes'));
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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',            
        ]);

        $mensajes = new Mensaje;

        $mensajes->nombre = $request->input('nombre');
        $mensajes->email = $request->input('email');
        $mensajes->asunto = $request->input('asunto');
        $mensajes->mensaje = $request->input('mensaje');
        $mensajes->save();

        return redirect()->route('contacto')->with('message','Su mensaje se envio correctamente.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {        
        //
        return view('contacto');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
