<?php

namespace App\Http\Controllers;

use App\Models\Documento;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'nombre' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf',
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
        return view('documentos.marco', compact('documentos'));
        //
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'file' => 'file|mimes:pdf',
        ]);

        $documentos = Documento::find($id);
        
        if($request->hasFile('file')){            
            $oldFile = $documentos->file;
            File::delete(public_path().'/'.$oldFile);
            $file=$request->file('file');
            $destinationPath = 'docs/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $documentos->file = $destinationPath . $filename;
        }

        $documentos->nombre = $request->input('nombre');
        
        $documentos->update();

        return redirect()->back();
        //
    }
    public function destroy($id)
    {
        $documentos = Documento::find($id);

        $oldFile = $documentos->file;
        File::delete(public_path().'/'.$oldFile);

        $documentos->delete();

        return redirect()->back();

        //
    }
}
