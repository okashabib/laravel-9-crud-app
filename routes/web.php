<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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


Route::get('/check-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is working!';
    } catch (\Exception $e) {
        return 'Database connection is not working: ' . $e->getMessage();
    }
});

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/employee', 'index')->name('employee');
    Route::post('employee-create', 'create')->name('employee.create');
});

Route::controller(DepartmentController::class)->group(function(){
    Route::get('/department', 'index')->name('department');
    Route::post('/department-create', 'create')->name('department.create');
});