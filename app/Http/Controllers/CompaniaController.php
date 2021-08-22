<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    public function getAll()
    {
        return Compania::all();
    }

    public function getById($compania)

    {
        $compania = Compania::find($compania);
        if (!$compania) {
            return response()->json(["mensaje" => "no hay"], 404);
        }
        return $compania->empleados;
    }

    public function create(Request $request)
    {
        $compania = Compania::create($request->all());

        return response()->json($compania, 201);
    }

    public function update(Request $request, Compania $compania)
    {
        $compania->update($request->all());

        return response()->json($compania, 200);
    }

    public function delete(Compania $compania)
    {
        $compania->delete();

        return response()->json(null, 204);
    }
}
