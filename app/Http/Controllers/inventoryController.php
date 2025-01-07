<?php

namespace App\Http\Controllers;

use App\Models\StockMovement;
use Illuminate\Http\Request;
use App\Models\Inventory;


class inventoryController extends Controller
{
    public function index(){

        $inventory =  Inventory::simplePaginate(5);
        $StockMovement =  StockMovement::simplePaginate(5);
       return view("/datum_backend.inventory", ["inventory" => $inventory, "StockMovement" => $StockMovement]);
    }

    public function edit($itemId){  
        $inventory = Inventory::find($itemId);
       return view("datum_backend.inventory-edit", ["inventory" =>  $inventory]);
    }

    public function update(Request $request, $inventoryId){
        Inventory::find($inventoryId)->update($request->all());
        return response()->json(["message" => "success"]);
    }

    public function destroy($inventoryId){
        Inventory::find($inventoryId)->delete();
        return response()->json($inventoryId);
    }
}
