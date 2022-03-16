<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get( "/new-employee", [ EmployeeController::class, "addEmployee" ]);
Route::get( "/store-employee", [ EmployeeController::class, "storeEmployee" ]);
Route::get( "/write-employee", [ EmployeeController::class, "selectEmployee" ]);
Route::get( "/delete/{id}", [ EmployeeController::class, "deleteEmployee" ]);
Route::get( "/update/{id}", [ EmployeeController::class, "showUpdateEmployee" ]);
Route::get( "/update-employee", [ EmployeeController::class, "submitUpdateEmployee" ]);
Route::get( "/add-employee", [ EmployeeController::class, "insertEmployee" ]);