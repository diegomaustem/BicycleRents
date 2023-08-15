<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    public function getAllBicycles()
    {
        $bicycle = new Bicycle();
        return response()->json($bicycle->all(), 200);
    }

    public function createBicycles(Request $request)
    {
        $bicycle = new Bicycle();
        $bicycle->brand = $request->brand;
        $bicycle->color = $request->color;
        $bicycle->model = $request->model;
        $bicycle->hoop  = $request->hoop;
        $bicycle->march = $request->march;

        if($bicycle->save()){
            return response()->json(['sucesso' => 'Inserção realizada com sucesso!'], 201);
        }
        return response()->json(['erro' => 'Não foi possível realizar a inserção!'], 404);
    }

    public function getBicycle($id)
    {
        $bicycle    = new Bicycle();
        $bikeWanted = $bicycle->find($id);

        if(!is_null($bikeWanted)) {
            return response($bikeWanted, 200);
        }
        return response()->json(['erro' => 'O recurso solicitado não foi encontrado!'], 404);
    }

    public function updateBicycle(Request $request, $id)
    {
        $bicycle = Bicycle::find($id);
        if(!is_null($bicycle)) {
            $bicycle->brand = $request->brand;
            $bicycle->color = $request->color;
            $bicycle->model = $request->model;
            $bicycle->hoop  = $request->hoop;
            $bicycle->march = $request->march;
            $bicycle->save();
            return response(['sucess' => 'Atualização realizada com sucesso!'], 200);
        }
        return response()->json(['erro' => 'Não foi possível realizar atualização!'], 404);
    }

    public function deleteBicycle($id)
    {
        $bicycle     = new Bicycle();
        $bikeToErase = $bicycle->find($id);

        if(!is_null($bikeToErase)) {
            $bikeToErase->delete();
            return response(['sucess' => 'A exclusão foi realizada com sucesso!'], 202);
        }
        return response()->json(['erro' => 'Não foi possível realizar exclusão!'], 404);
    }
}
