<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['catalogos']=Catalogo::paginate(5);
        return view('catalogo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $datosCatalogo = request()->all();
       $datosCatalogo = request()->except('_token');

       if($request->hasFile('Foto')){
        $datosCatalogo['Foto']=$request->file('Foto')->store('uploads','public');
       }
       
       




       Catalogo::insert($datosCatalogo);

       // return  response()->json($datosCatalogo);
       return redirect('catalogo')->with('mensaje','producto  agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $catalogo=Catalogo::findOrFail($id);
        return view('catalogo.edit',compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosCatalogo = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $catalogo=Catalogo::findOrFail($id);
            Storage::delete('public/'.$catalogo->Foto);
            $datosCatalogo['Foto']=$request->file('Foto')->store('uploads','public');
           }




        Catalogo::where('id','=',$id)->update($datosCatalogo);

        $catalogo=Catalogo::findOrFail($id);
        return view('catalogo.edit',compact('catalogo'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $catalogo=Catalogo::findOrFail($id); 
        if(Storage::delete('public/'.$catalogo->Foto)){
            Catalogo::destroy($id); 
        }



        
        return redirect('catalogo')->with('mensaje','Producto borrado');
    }
}
