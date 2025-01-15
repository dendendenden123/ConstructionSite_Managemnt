<?php

namespace App\Http\Controllers;
use App\Exceptions\CustomException;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\UpdateTimeline;
use Illuminate\Http\Request;
use App\Models\Payroll;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class employeeController extends Controller
{


    public function attendance(Request $request){

   
            $rfidTag = $request->input('rfid_tag'); // Retrieve the RFID tag from the request
            
            // Find the employee by RFID tag
            $employee = Employee::where('rfid_tag', "=", $rfidTag)->first();
            
            if (!$employee) {
                return response()->json(['message' => 'none']);
            }
            
            // Check if there is an existing attendance record with null check_out_time
            $today = Carbon::today('Asia/Manila');
            $attendanceCount = Attendance::where('employee_id', $employee->id)
                ->whereDate('created_at', $today)
                ->count();


              

            if ($attendanceCount >= 4) {
                return response()->json(['message' => 'limit_reached']);
            }

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



                $id = $employee->id;
                $Rate = $employee->hourly_rate;
                $hours_worked = $hoursWorked;
                $payrollExists = Payroll::where('employee_id', $id)->exists();
                
                
                if ( $payrollExists){
                    $payroll = Payroll::where('employee_id', $id)->first();
                    $payroll->hours_worked += $hours_worked;
                    $payroll->Rate = $Rate;
                    $payroll->Gross += $gross = $Rate * $hours_worked;
                    $payroll->taxes += $tax = $gross * 0.20;
                    $payroll->deductions += $deductions = $gross * 0.10;
                    $payroll->Netpay += $gross - ($tax + $deductions);
                    $payroll->save();
                    
                } else {
                    Payroll::create([
                        'employee_id' => $id,
                        'hours_worked' => $hours_worked,
                        'Rate' => $Rate,
                        'Gross' => $gross = $Rate * $hours_worked,
                        'taxes' => $tax = $gross * 0.2,
                        'deductions' => $deductions = $gross * 0.1,
                        'Netpay' => $gross - ($tax + $deductions),
                       
                    ]);

                }

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

    // public function payroll($id, $hours_worked)
    // {

    //     $Rate = Employee::find($id)->hourly_rate;


    //     if(Payroll::find($id)){
    //         $payroll = Payroll::find($id);
    //         $payroll->hours_worked = $payroll->hours_worked + $hours_worked;
    //         $payroll->Rate = $Rate;
    //         $payroll->Gross = $payroll->Gross + ($gross = $Rate * $hours_worked);
    //         $payroll->taxes = $payroll->taxes + ($tax =  $gross * 0.20);
    //         $payroll->deductions = $payroll->deductions ($deductions = $gross * 0.10);
    //         $payroll->Netpay = $payroll->Netpay + ($gross - ($tax  + $deductions));
    //         $payroll->save();
    //     }else{
        
    //     Payroll::create([
    //         'employee_id' => $id,
    //         'hours_worked' => $hours_worked,
    //         'Rate' => $Rate,
    //         'Gross' => $gross = $Rate * $hours_worked,
    //         'taxes' => $tax =  $gross * 0.2,
    //         'deductions' => $deductions = $gross * 0.1,
    //         'Netpay' =>$gross - ($tax  + $deductions),
    //     ]);
    //     }

       

    // }

    public function index()
    {
      
        if(Auth::id() != 1){
            return redirect("/client-show/" . Auth::id() );
        }
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