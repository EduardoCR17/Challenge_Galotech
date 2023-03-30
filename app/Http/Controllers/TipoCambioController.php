<?php

namespace App\Http\Controllers;

use App\Models\TipoCambio;
use Illuminate\Http\Request;

class TipoCambioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_cambio = TipoCambio::select('*')->orderBy('id')->get();
        return view('tipos_cambio.index', ['tipos_cambio' => $tipos_cambio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos_cambio.create', ['tipos_cambio' => TipoCambio::all()]);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'venta' => 'required|numeric',
            'compra' => 'required|numeric',
        ]);

        $tipo_cambio = new TipoCambio();

        $tipo_cambio->tc_venta = $request->input('venta');
        $tipo_cambio->tc_compra = $request->input('compra');
        $tipo_cambio->save();

        return view("tipos_cambio.message", ["msg"=>"Registro guardado"]);


    }

    /**
     * Display the specified resource.
     */
    public function show(TipoCambio $tipoCambio)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo_cambio = TipoCambio::find($id);
        return view('tipos_cambio.edit', ['tipo_cambio' => $tipo_cambio]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'venta' => 'required|numeric',
            'compra' => 'required|numeric',
        ]);


        $tipo_cambio = TipoCambio::find($id);
        $tipo_cambio->tc_venta = $request->input('venta');
        $tipo_cambio->tc_compra = $request->input('compra');

        $tipo_cambio->save();

        return view('tipos_cambio.message', ['msg' => "Registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipo_cambio = TipoCambio::find( $id );
        $tipo_cambio->delete(); 

        return redirect('tipo-cambio');
    }

    function getTipoCambio(Request $request) {
        $data = Tipocambio::select('tc_venta','tc_compra')->latest()->first();
        return response()->json($data);
    }
}

