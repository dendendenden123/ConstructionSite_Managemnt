<?php

namespace App\Http\Controllers;
use App\Exceptions\CustomException;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{

    public function index(){
        return view("/datum_backend.employeeList", ["employees" => Employee::all()]);
    }

    public function show(){
        return view("/datum_backend.employee-dashboard");
    }

    public function edit($id){
        return view("/datum_backend.employee-edit", ["employee" => Employee::find($id)]);
    }

public function update(Request $request, $id){

    if (! Employee::where("rfid_tag", $request->rfid_tag)->doesntExist() && Employee::find($id)->rfid_tag != $request->rfid_tag) {
        return response()->json(["message" => "error", "error" => "RFID tag already exists"]);
    } else {
        $employee = Employee::find( $id);
        $employee->name = $request->name;
        $employee->rfid_tag = $request->rfid_tag;
        $employee->position = $request->position;
        $employee->department = $request->department;
        $employee->hourly_rate = $request->hourly_rate;
        $employee->save();
        return response()->json(["message" => "success"]);
    } 
}

    public function destroy($id, Request $request){
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json(["message" => $id]);
    }
}