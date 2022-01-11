<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Api\TaskController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::group(['middleware'=> ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/chat', [PageController::class, 'chat'])->name('chat');
    
    // Route::get('/tasks', [PageController::class, 'tasks'])->name('tasks');
    // Route::get('/notes', [PageController::class, 'notes'])->name('notes');
    // Route::get('/notas', [PageController::class, 'notas'])->name('notas');
    // Route::get('/notas', [NotaController::class, 'index']);

    Route::get('/notes', [NotaController::class, 'index'])->name('notes');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');

    Route::post('/notes', [NotaController::class, 'store']);
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::post('/clientes', [ClienteController::class, 'store']);

    Route::get('/notesLista', [NotaController::class, 'listnotes']);
    Route::get('/clientesLista', [ClienteController::class, 'listclientes']);
    Route::get('/tasksLista', [TaskController::class, 'listtasks']);

    Route::delete('/tasksDelete/{id}', [TaskController::class, 'destroyTask']);
    Route::delete('/clientesDelete/{id}', [ClienteController::class, 'destroyCliente']);
    Route::delete('/notesDelete/{id}', [NotaController::class, 'destroyNota']);
});

