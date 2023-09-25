<?php

namespace App\Http\Controllers;

use App\Models\Documento;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentos = Documento::all();
        return view('admin.documentos.index', compact('documentos'));
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
            'nombre' => 'required',
            'file' => 'required'
        ]);

        $documentos = new Documento;
        $documentos->nombre = $request->input('nombre');

        if($request->hasFile('file')){
            $file=$request->file('file');
            $destinationPath = 'docs/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $documentos->file = $destinationPath . $filename;
        }


        $documentos->save();

        return redirect()->back();
        //
    }

    public function show()
    {
        $documentos = Documento::all();
        return view('marco', compact('documentos'));
        //
    }
    public function update(Request $request, $id)
    {
        $documentos = Documentos::find($id);
        $noticias->nombre = $request->input('nombre');

        if($request->hasFile('file')){
            $file=$request->file('file');
            $destinationPath = 'docs/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $documentos->file = $destinationPath . $filename;
        }

        $noticias->update();

        return redirect()->back();
        //
    }
    public function destroy($id)
    {
        $documentos = Documentos::find($id);
        $documentos->delete();

        return redirect()->back();

        //
    }
}
