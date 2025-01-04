<?php

namespace App\Http\Controllers;
use App\Exceptions\CustomException;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\UpdateTimeline;
use Illuminate\Http\Request;

class employeeController extends Controller
{

    public function index()
    {
        return view("/datum_backend.employeeList", ["employees" => Employee::all()]);
    }

    public function show($id)
    {
        $employee = Employee::with([
            "task.project",
            "payroll",
            "attendance",
            "updateTimeline.employee",
            "updateTimeline.project",
            "updateTimeline.user",
        ])->find($id);

        $attendance = Attendance::where('employee_id', $id)->simplePaginate(5);
        $totalHOurs = Attendance::where('employee_id', $id)->sum('hours_worked');


        $grossPay = $totalHOurs * $employee->hourly_rate;
        
        //deduct 30% tax and add 100 for net pay
        $netPay = $grossPay - ($grossPay * 30 / 100);
        
        $netPay = $netPay > 0 ? $netPay - 100 : $netPay;

        return view("/datum_backend.employee", [
            "employee" => $employee, 
            "attendance" => $attendance,
            "grossPay" => $grossPay,
            "netPay" => $netPay,
        ]);
    }

    public function create()
    {
        return view("/datum_backend.employee-create");
    }

    public function store(Request $request)
    {
        if (!Employee::where("rfid_tag", $request->rfid_tag)->doesntExist()) {
            return response()->json(["message" => "error", "error" => "RFID tag already exists"]);
        } else {
            Employee::create($request->all());
            return response()->json(["message" => "success"]);
        }
    }

    public function edit($id)
    {
        return view("/datum_backend.employee-edit", ["employee" => Employee::find($id)]);
    }

    public function update(Request $request, $id)
    {

        if (!Employee::where("rfid_tag", $request->rfid_tag)->doesntExist() && Employee::find($id)->rfid_tag != $request->rfid_tag) {
            return response()->json(["message" => "error", "error" => "RFID tag already exists"]);
        } else {
            $employee = Employee::find($id);
            $employee->name = $request->name;
            $employee->rfid_tag = $request->rfid_tag;
            $employee->position = $request->position;
            $employee->department = $request->department;
            $employee->hourly_rate = $request->hourly_rate;
            $employee->save();
            return response()->json(["message" => "success"]);
        }
    }

    public function destroy($id, Request $request)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json(["message" => $id]);
    }
}