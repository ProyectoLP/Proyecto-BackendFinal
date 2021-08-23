<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAbogado;

class TipoAbogadoController extends Controller
{
    //

    public function getAll()
    {
        return TipoAbogado::all();
    }

    public function create(Request $request)
    {
        $tipoAbogado = TipoAbogado::create($request->all());

        return response()->json($tipoAbogado, 201);
    }


    
    public function getById($tipoAbogado)

    {
        $tipoAbogado = TipoAbogado::find($tipoAbogado);
        if (!$tipoAbogado) {
            return response()->json(["mensaje" => "no hay"], 404);
        }
        return $tipoAbogado;
    }

    public function update(Request $request,  TipoAbogado $tipoAbogado)
    {
        $tipoAbogado->update($request->all());

        return response()->json($tipoAbogado, 200);
    }

    public function delete( TipoAbogado $tipoAbogado)
    {
        $tipoAbogado->delete();

        return response()->json(["mensaje" => "Borrado con exito "], 204);
    }



}
