<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateTimelineController extends Controller
{
    //
    public function create($employeeID){
        return view("/datum_backend.updateTimeline-create", ["employeeID" => $employeeID]);
    }
}
