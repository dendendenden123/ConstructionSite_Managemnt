<?php

namespace App\Http\Controllers;

use App\Models\StockMovement;
use Illuminate\Http\Request;

class stockMovementController extends Controller
{
    public function edit($stockMovenmentId){

        dd(StockMovement::find($stockMovenmentId));

        return view("datum_backend.stockMovement-edit", ["stockMovement" => StockMovement::find($stockMovenmentId)]);
    }

    public function destroy($stockMovenmentId){
        StockMovement::find($stockMovenmentId)->delete();
        return response()->json("success");
    }
}
