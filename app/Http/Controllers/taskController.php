<?php

namespace App\Http\Controllers;
use  App\Models\Task;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function destroy($projectId, $taskId){
        Task::find($taskId)->delete();

        return redirect("/admin/" . $projectId);
    }
}
