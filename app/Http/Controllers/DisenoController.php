<?php

namespace App\Http\Controllers;

use App\Models\Diseno;
use Illuminate\Http\Request;

class DisenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseno = Diseno::all();
        return $diseno;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diseno = new Diseno();
        $diseno->nombre = $request->nombre;
        $diseno->precio = $request->precio;
        $diseno->save();

        return response()->json([
            "mensaje" => "diseño registrado correctamente"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function show(Diseno $diseno)
    {
        $diseno = Diseno::findOrFail($diseno->id);
        return $diseno;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function edit(Diseno $diseno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diseno $id)
    {
        if (diseno::where('id', $id)->exists()) {
            $diseno = Diseno::find($id);
            $diseno->nombre = is_null($request->nombre) ? $diseno->nombre : $request->nombre;
            $diseno->precio = is_null($request->precio) ? $diseno->precio : $request->precio;
            $diseno->save();
    
            return response()->json(["mensaje" => "datos actualizados correctamente" ], 200);
            } else {
            return response()->json(["mensaje" => "Diseño no encontrado"], 404);
                    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diseno $diseno)
    {
        $diseno->delete();
        return response()->json(["mensaje" => "Solicitante #$diseno->id eliminado", ]);
    }
}
