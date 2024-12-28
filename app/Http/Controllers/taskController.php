<?php

namespace App\Http\Controllers;
use  App\Models\Task;
use  App\Models\Employee;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function destroy($projectId, $taskId){
        Task::find($taskId)->delete();

        return redirect("/admin/" . $projectId);
    }

    public function edit($projectId, $taskId){
        $task = Task::with("employee")->find($taskId);
        $employee = Employee::all();

        $assignedEmployee = []; // Initialize the array before the loop

        foreach($employee as $e) {
            $noTask = Task::where("employee_id", "=", $e->id)->count();
            $assignedEmployee[] = [$e->id, $e->name, $noTask]; 
        }
    
        return view("datum_backend.task-edit", ["task" =>  $task, "assignedEmployee" => $assignedEmployee]);
    }

    public function update(Request $request, $taskId){
        $task = Task::find($taskId);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->employee_id = $request->employee_id;
        $task->start_date = $request->start_date;
        $task->due_date = $request->due_date;
        $task->status = $request->status;

        $task->save();;


        return response()->json('success');
    }
}
