<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Api\Message;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get('user/me', [UserController::class, 'me'])->name('users.me');
    Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}',[UserController::class, 'show'])->name('users.show');
    // Route::delete('/tasks/{id}',[TaskController::class, 'destroy']);
    Route::get('/messages/{user}', [MessageController::class, 'ListMessages'])->name('message.ListMessages');
    // Route::get('/tasks/{user}', [MessageController::class, 'ListTasks'])->name('task.ListTasks');
    Route::post('/messages/store', [MessageController::class, 'store'])->name('store');
});
