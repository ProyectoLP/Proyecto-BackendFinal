<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function getAll()
    {
        return Horario::all();
    }

    public function create(Request $request)
    {
        $Horario = Horario::create($request->all());

        return response()->json($Horario, 201);
    }


    
    public function getById($Horario)

    {
        $Horario = Horario::find($Horario);
        if (!$Horario) {
            return response()->json(["mensaje" => "no hay"], 404);
        }
        return $Horario;
    }

    public function update(Request $request,  Horario $Horario)
    {
        $Horario->update($request->all());

        return response()->json($Horario, 200);
    }

    public function delete( Horario $Horario)
    {
        $Horario->delete();

        return response()->json(["mensaje" => "Borrado con exito "], 204);
    }

}
