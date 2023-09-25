<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticias::all();
        return view('admin.noticias.index', compact('noticias'));
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
            'featured' => 'required|image'
        ]);

        $noticias = new Noticias;

        if($request->hasFile('featured')){
            $file=$request->file('featured');
            $destinationPath = 'images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $noticias->featured = $destinationPath . $filename;
        }

        $noticias->titulo = $request->input('titulo');
        $noticias->descripcion = $request->input('descripcion');
        $noticias->save();

        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $noticias = Noticias::all();
        return view('welcome', compact('noticias'));
        //
    }

    public function show1()
    {
        $noticias = Noticias::all();
        return view('noticias', compact('noticias'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $noticias = Noticias::find($id);
        $noticias->titulo = $request->input('titulo');
        $noticias->descripcion = $request->input('descripcion');
        $noticias->update();

        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $noticias = Noticias::find($id);
        $noticias->delete();

        return redirect()->back();

        //
    }
}
