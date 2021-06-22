<?php

namespace App\Http\Controllers\materiais;

use App\Http\Controllers\Controller;
use App\Models\Material as ModelsMaterial;
use Illuminate\Http\Request;
use App\Models\unidade as Unidades;
use Illuminate\Support\Arr;
use Throwable;

class Material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidades::all();
        // $unidades=['Kg', 'Cm', 'mm', 'm'];
        return view('materiais/newMaterial', ['unidades' => $unidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidades::all();
        // $unidades=['Kg', 'Cm', 'mm', 'm'];
        return view('materiais/newMaterial', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMaterial(Request $request)
    {

        // var_dump($request);
        $new_material = new ModelsMaterial();
        $new_material->nome = $request->material;
        $new_material->valor = $request->valor;
        $new_material->save();






        // $unidade_medida = new Unidades($unidade_medida);
        // $unidade_medida->save();


        // var_dump($request->all());

        // return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}