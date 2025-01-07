<?php

namespace App\Http\Controllers;

use App\Models\StockMovement;
use App\Models\Inventory;
use App\Models\Project;
use Illuminate\Http\Request;

class stockMovementController extends Controller
{
    public function create(){
        
        return view(
            "datum_backend.stockMovement-create", [
                "inventory" => Inventory::all(),
                "project" => Project::all()
                ]
        );
    }

    Public function store(Request $request){
        
        StockMovement::create($request->all());

        return response()->json("success");
    }
    
    public function edit($stockMovenmentId){
        return view("datum_backend.stockMovement-edit", [
            "stockMovement" => StockMovement::find($stockMovenmentId),
            "inventory" => Inventory::all(),
            "project" => Project::all()
        ]);
    }

    public function update(Request $request, $stockMovenmentId){
        $stockMovement = StockMovement::find($stockMovenmentId);
        $stockMovement->update($request->all());

        return response()->json("success");
    }

    public function destroy($stockMovenmentId){
        StockMovement::find($stockMovenmentId)->delete();
        return response()->json("success");
    }
}
