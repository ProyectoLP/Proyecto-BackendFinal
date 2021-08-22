<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function getAll()
    {
        return Empleado::all();
    }

    public function getById($empleado)
    {
        $id = (string) $empleado;
        $companias = Compania::where('nombre', $id)->get();
        foreach ($companias as $compania) {
            foreach ($compania->empleados as $empleado) {
                $empleados[] = $empleado;
            }
        }
        return $empleados;
    }

    public function create(Request $request)
    {
        $empleado = Empleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());

        return response()->json($empleado, 200);
    }

    public function delete(Empleado $empleado)
    {
        $empleado->delete();

        return response()->json(null, 204);
    }
}
