<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Abogado;
use Illuminate\Support\Facades\DB;

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


    
    // public function getById($Horario)

    // {
    //     $Horario = Horario::find($Horario);
    //     if (!$Horario) {
    //         return response()->json(["mensaje" => "no hay"], 404);
    //     }
    //     return $Horario;
    // }

    public function update(Request $request,  Horario $Horario)
    {
        $Horario->update($request->all());

        return response()->json($Horario, 200);
    }

    public function delete( string $id)

    {
        DB::table('horarios')->where('Id', '=', $id)->delete();
        return "borrado con exito ";
    }


    public function getHorarioTipo($id)
    {
        $id = (string) $id;
        $abogados = Abogado::where('tipoabogado_id', $id)->get();
        $horarios = array();
        foreach ($abogados as $abogado) {
            $horario = Horario::where('abogado_id', $abogado["id"])->get();
            foreach ($horario as $hor) {
                array_push($horarios, $hor);
            }
        } 
        return $horarios;
    }


    public function getById($horario)

    {
        $horario = Horario::find($horario);
        if (!$horario) {
            return response()->json(["mensaje" => "no hay"], 404);
        }
        return $horario;
    }

}
