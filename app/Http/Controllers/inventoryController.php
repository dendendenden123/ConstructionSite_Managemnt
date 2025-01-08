<?php

namespace App\Http\Controllers;

use App\Models\StockMovement;
use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;

class inventoryController extends Controller
{
    public function index()
    {
        
        if(Auth::id() != 1){
            return redirect("/client-show/" . Auth::id() );
        }

        $inventory = Inventory::simplePaginate(5);
        $StockMovement = StockMovement::simplePaginate(5);
        return view("/datum_backend.inventory", ["inventory" => $inventory, "StockMovement" => $StockMovement]);
    }

    public function create()
    {
        return view("datum_backend.inventory-create");
    }

    public function store(Request $request)
    {
        $newInventory = $request->all();
        $newInventory["redorder_level"] = "Temporarily disabled";
        Inventory::create($newInventory);

        return response()->json("success");
    }

    public function edit($itemId)
    {

        $inventory = Inventory::find($itemId);
        return view("datum_backend.inventory-edit", ["inventory" => $inventory]);
    }

    public function update(Request $request, $inventoryId)
    {
        Inventory::find($inventoryId)->update($request->all());
        return response()->json(["message" => "success"]);
    }

    public function destroy($inventoryId)
    {
        Inventory::find($inventoryId)->delete();
        return response()->json($inventoryId);
    }
}
