<?php
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// get todos list
Route::get('/todos', [TodoController::class, 'index']);
// retrieve a single todo
Route::get('/todos/{id}', [TodoController::class,'show']);
// create a todo
Route::post('/todos', [TodoController::class,'store']);
// Update a todo
Route::put('/todos', [TodoController::class,'update']);
// delete a todo
Route::delete('/todos/{id}', [TodoController::class,'destroy']);