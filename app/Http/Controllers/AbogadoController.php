<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abogado;

class AbogadoController extends Controller
{
    public function getAll()
    {
        return Abogado::all();
    }

    public function create(Request $request)
    {
        $Abogado = Abogado::create($request->all());

        return response()->json($Abogado, 201);
    }


    
    public function getById($Abogado)

    {
        $Abogado = Abogado::find($Abogado);
        if (!$Abogado) {
            return response()->json(["mensaje" => "no hay"], 404);
        }
        return $Abogado;
    }

    public function update(Request $request,  Abogado $Abogado)
    {
        $Abogado->update($request->all());

        return response()->json($Abogado, 200);
    }

    public function delete( Abogado $Abogado)
    {
        $Abogado->delete();

        return response()->json(["mensaje" => "Borrado con exito "], 204);
    }
}
