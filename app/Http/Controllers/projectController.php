<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(Request $request){

        $project = Project::with("user")->get();
        return view("datum_backend.index", ["projects"=>$project]);
    }

    public function create(){
        return view("datum_backend.project-create", ["users"=>User::all()]);
    }

    public function show($id){
        $project = Project::with(["user", "stockMovement", "task", "task.employee", "invoice", "contract"])->find($id); 
        return view("datum_backend.project", ["project"=>$project]);
    } 

    public function store(Request $request){
       $project = Project::create($request->all());
        
        return response()->json(['id' => $project->id]);
    }

    public function edit($projectId, Request $request){
        $project = Project::with("user")->find($projectId);
        $users = User::all();
        return view("datum_backend.project-edit", ["project"=>$project, "users"=>$users]);
     }

     public function update(Request $request){

        $project = Project::find($request->id);

        $project->update($request->all());
        dd("updated");
     }

     public function destroy($projectId){
        $project = Project::find($projectId);
        $project->delete();
        return response()->json(["message" => $projectId]);
     }

}
