<?php

namespace App\Http\Controllers;
use App\Exceptions\CustomException;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\UpdateTimeline;
use Illuminate\Http\Request;
use Carbon\Carbon;

class employeeController extends Controller
{

    public function attendance(Request $request){
        $rfidTag = $request->input('rfid_tag'); // Retrieve the RFID tag from the request
    
    // Find the employee by RFID tag
    $employee = Employee::where('rfid_tag', $rfidTag)->first();
    
    if (!$employee) {
        return response()->json(['message' => 'none']);
    }
    
    // Check if there is an existing attendance record with null check_out_time
    $attendance = Attendance::where('employee_id', $employee->id)
        ->whereNull('check_out_time')
        ->first();
    
    if ($attendance) {
        // Update check_out_time and calculate hours worked
        $checkOutTime = Carbon::now('Asia/Manila');
        $hoursWorked = Carbon::parse($attendance->check_in_time)->diffInHours($checkOutTime->format('H:i:s'));

        $attendance->update([
            'check_out_time' => $checkOutTime->format('H:i:s'),
            'hours_worked' => $hoursWorked,
        ]);

        return response()->json(['message' => 'update'], 200);
    } else {
        // Insert a new attendance record with only check_in_time
        Attendance::create([
            'employee_id' => $employee->id,
            'check_in_time' => Carbon::now('Asia/Manila')->format('H:i:s'),
            'check_out_time' => null,
            'hours_worked' => null,
        ]);

        return response()->json(['message' => 'create'], 200);
    }
    }

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