<?php

namespace App\Http\Controllers;
use App\Models\Project;
use  App\Models\Task;
use  App\Models\Employee;

use Illuminate\Http\Request;

class taskController extends Controller
{

    public function create($projectId){
        $employee = Employee::all();
        $assignedEmployee = []; 

        foreach($employee as $e) {
            $noTask = Task::where("employee_id", "=", $e->id)->count();
            $assignedEmployee[] = [$e->id, $e->name, $noTask]; 
        }

        $defaultProject =  Project::find($projectId);

        return view("datum_backend.task-create", ["assignedEmployee" => $assignedEmployee, "projectTitle" => Project::all(), "defaultProject" => $defaultProject]);
    }

    public function store(Request $request){
        Task::create($request->all());
        return response()->json(["id" => $request->project_id]);

    }

    public function update(Request $request, $taskId){
        Task::find($taskId)->update($request->all());

        return response()->json('success');
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

    public function destroy($projectId, $taskId){
        Task::find($taskId)->delete();
        return redirect("/admin/" . $projectId);
    }

}
