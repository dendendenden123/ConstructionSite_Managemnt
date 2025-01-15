<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(Request $request){
        $project = Project::with("user")->get();
        if(Auth::id() != 1){
            return redirect("/client-show/" . Auth::id() );
        }


        $payroll = Payroll::with("employee")->simplePaginate(5);
        
        return view("datum_backend.index", ["projects"=>$project, "payroll" =>  $payroll]);
    }

    public function generatePDF()
    {
        $payroll = Payroll::all(); // Replace with your table's model
        $pdf = Pdf::loadView('datum_backend.printPayroll', compact('payroll'));
        return $pdf->download('table.pdf'); // To download
        // return $pdf->stream('table.pdf'); // To display in the browser
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
