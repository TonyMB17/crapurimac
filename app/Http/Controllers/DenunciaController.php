<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Denuncia;
use App\Mail\DenunciaMail;
use App\Mail\RespuestaMail;
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
        $pdf = Pdf::loadView('admin.denuncias.pdf', compact('denuncia'));        
        return $pdf->stream();        
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'dni' => 'required|string|max:8|min:8|regex:/^[0-9]{8}$/i',
            'nombre' => 'required',
            'telefono' => 'required|string|max:9|min:9|regex:/^[0-9]{9}$/i',
            'correo' => 'required|email|string',
            'denunciado' => 'required|string|max:255',
            'institucion' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'fecha' => 'required',
            'descripcion' => 'required',
            'testigos' => 'required',
            'archivo' => 'required'
        ], $message = [
            'dni.regex' => 'Solo se permiten numeros',
            'telefono.regex' => 'Solo se permiten numeros'
        ]);

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
        $denuncias->estado = 1;

        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $destinationPath = 'docs/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $denuncias->file = $destinationPath . $filename;
        }

        $denuncias->save();

        Mail::to('comicionregionalanticorrupcion@gmail.com')->send(new DenunciaMail($denuncias));

        return redirect()->back()->with('message', 'Se ha registrado su denuncia.');
        //
    }

    public function answer($id)
    {
        //
        $denuncia = Denuncia::find($id);
        return view('admin.denuncias.answer', compact('denuncia'));
    }
    public function checked(Request $request, $id)
    {
        // dd($email->message);

        $denuncia = Denuncia::find($id);
        $denuncia->estado = 0;

        $email = (object)[
            'message' => $request->input('message'),
            'subject' => $denuncia->fecha
        ];

        $denuncia->update();

        Mail::to($denuncia->correo)->send(new RespuestaMail($email));

        return redirect()->route('home.denuncias');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
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
