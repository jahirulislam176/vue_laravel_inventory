<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\CategoryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('/login', [AuthController::class,'login']);
    Route::post('/logout', [AuthController::class,'logout']);
    Route::post('/refresh', [AuthController::class,'refresh']);
    Route::post('/me', [AuthController::class,'me']);
    Route::post('/register', [AuthController::class,'register']);

});

// Route::apiResources('/employee','api\EmployeeController');


Route::get('/employee',[EmployeeController::class,'index']);
Route::post('/employee',[EmployeeController::class,'store']);
Route::post('/employee/delete/{id}',[EmployeeController::class,'destroy']);
//show employee
Route::get('/employee/show/{id}',[EmployeeController::class,'show']);
//supplier module
Route::get('/supplier',[SupplierController::class,'index']);
Route::post('/supplier/post',[SupplierController::class,'store']);
Route::post('/employee/update/{id}',[EmployeeController::class,'update']);
//category Controller
Route::get('/category',[CategoryController::class,'index']);
Route::post('/category',[CategoryController::class,'store']);
Route::get('/category/show/{id}',[CategoryController::class,'show']);
Route::post('/category/update/{id}',[CategoryController::class,'update']);
Route::post('/category/delete/{id}',[CategoryController::class,'destroy']);








