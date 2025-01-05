<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\UpdateTimeline;
use App\Models\Project;

class updateTimelineController extends Controller
{

    public function create($employeeID){
     $employee = Employee::with(["task.project"])->find($employeeID);

        return view("/datum_backend.updateTimeline-create", ["employee" => $employee]);
    }


    public function store(Request $request, $employeeID){
        
      
    $data = $request->all();
    $data['user_id'] = Project::find($request->project_id)->user_id;
    $data['image_path'] = "none";

    UpdateTimeline::create($data);
    
      return response()->json(["message" => "success", "id" => $employeeID]);
    }

    public function destroy($employeeId, $updateId){

       UpdateTimeline::find($updateId)->delete();
      // return response()->json("success");

      return redirect("/employee/" . $employeeId);
    }
    
}
