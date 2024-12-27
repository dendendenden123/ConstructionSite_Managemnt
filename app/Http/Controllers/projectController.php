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

        try{
            $projects = Project::simplePaginate(5); 

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('datum_backend.adminProjectList', compact('projects'))->render(),
                ]);
            }
                return view("/datum_backend.index", compact("projects"));
            
           
        }catch(\Exception $e){
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function show($id){
        $project = Project::with(["user", "stockMovement", "task", "task.employee", "invoice", "contract"])->find($id); 
        return view("datum_backend.project", ["project"=>$project]);
    }
}
