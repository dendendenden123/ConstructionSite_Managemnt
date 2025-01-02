<?php

use App\Http\Controllers\projectController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\clientProjectController;


//datum
Route::get('/datum_backend/{page}', function ($page) {
    $name = "datum_backend." . str_replace(".html", "", $page);
   return view($name);
});
Route::get('/datum_app/{page}', function ($page) {
    $name = "datum_app." . str_replace(".html", "", $page);
   return view($name);
});

// START LANDING PAGE
Route::view('/', '/landing_page.index');
Route::view('/about','/landing_page.about');
Route::view('/contact', '/landing_page.contact');
Route::view('/service','/landing_page.service');

//START LOGIN PAGE
Route::get('/login', [userController::class, "create"] );
Route::post('/login', [userController::class, "store"] );
Route::post('/logout', [userController::class, "destroy"] );

//REGISTER PAGE
Route::post("/register",  [registerController::class, "store"]);

//employee page
Route::get("/employeeList", [employeeController::class, "index"]);
Route::get("/employee", [employeeController::class, "show"]);
Route::get("/employeeEdit/{id}", [employeeController::class, "edit"]);
Route::post("/employeeUpdate/{id}", [employeeController::class, "update"]);
Route::get("/employeeDelete/{id}", [employeeController::class, "destroy"]);

//project
Route::get('/admin', [projectController::class,"index"]);
Route::get('/admin/{id}', [projectController::class,"show"]);
Route::get("/projectCreate", [projectController::class,"create"]);
Route::post("/projectStore", [projectController::class,"store"]);
Route::get("/projectEdit/{projectId}", [projectController::class,"edit"]);
Route::post("/projectUpdate", [projectController::class,"upate"]);
Route::get("/projectDelete/{projectId}", [projectController::class, "destroy"]);

//task
Route::get("/taskCreate/{projectId}", [taskController::class, "create"]);
Route::post("/taskStore/{projectId}", [taskController::class, "store"]);
Route::get("/taskDelete/{projectId}/{taskId}", [taskController::class, "destroy"]);
Route::get("/taskEdit/{projectId}/{taskId}", [taskController::class, "edit"]);
Route::post("/taskUpdate/{taskId}", [taskController::class, "update"]);







