<?php

use App\Http\Controllers\inventoryController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\updateTimelineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\employeeController;


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
Route::view('/about', '/landing_page.about');
Route::view('/contact', '/landing_page.contact');
Route::view('/service', '/landing_page.service');
Route::view('/attendance', '/clockInOut');


//client 
Route::get('/client', [userController::class, "index"]);
Route::get('/client-show/{id}', [userController::class, "show"]);
Route::get('/login', [userController::class, "create"]);
Route::post('/login', [userController::class, "store"]);
Route::post('/logout', [userController::class, "destroy"]);

//REGISTER PAGE
Route::post("/register", [registerController::class, "store"]);

//employee page
Route::controller(employeeController::class)->group(function () {
    Route::get('/employeeList', 'index');
    Route::get('/employeeCreate', 'create');
    Route::post('/employeeStore', 'store');
    Route::get('/employee/{id}', 'show');
    Route::get('/employeeEdit/{id}', 'edit');
    Route::post('/employeeUpdate/{id}', 'update');
    Route::get('/employeeDelete/{id}', 'destroy');
});

//project
Route::controller(projectController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/{id}', 'show');
    Route::get('/projectCreate', 'create');
    Route::post('/projectStore', 'store');
    Route::get('/projectEdit/{projectId}', 'edit');
    Route::post('/projectUpdate', 'update');
    Route::get('/projectDelete/{projectId}', 'destroy');
});

//task
Route::controller(taskController::class)->group(function () {
    Route::get('/taskCreate/{projectId}', 'create');
    Route::post('/taskStore/{projectId}', 'store');
    Route::get('/taskDelete/{projectId}/{taskId}', 'destroy');
    Route::get('/taskEdit/{projectId}/{taskId}', 'edit');
    Route::post('/taskUpdate/{taskId}', 'update');
});

//UpateTimeline
Route::controller(updateTimelineController::class)->group(function () {
    Route::get("/projectUpdateCreate/{employeeID}", "create");
    Route::post("/projectUpdateCreate/{employeeID}", "store");
    Route::get("/projectUpdateDelete/{employeeId}/{updateId}", "destroy");
});

//inventory
Route::controller(inventoryController::class)->group(function () {
    Route::get("/inventory", "index");
    Route::get("/invedentory-edit/{itemId}", "edit");
    Route::get("/invedentory-delete", "destroy");
});

//stockMovement
Route::controller(inventoryController::class)->group(function (){
    Route::get("/stockMOvement-edit", "edit");
    Route::get("/stockMOvement-delete", "destroy");
});