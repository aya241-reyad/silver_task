<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {


    Route::get('get-employees', [EmployeeController::class, 'get']);
    Route::post('create-employee', [EmployeeController::class, 'create']);
    Route::put('update-employee/{id}', [EmployeeController::class, 'update']);
    Route::delete('delete-employee/{id}', [EmployeeController::class, 'delete']);





    // Route::post('create_user', [UserController::class, 'create']);
    // Route::post('add_attachment', [UserController::class, 'addAttachment']);

});

