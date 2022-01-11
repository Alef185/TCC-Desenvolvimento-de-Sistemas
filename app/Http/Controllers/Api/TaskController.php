<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Web\PageController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Auth;

class TaskController extends Controller
{
    public function listtasks(){
        $user = Auth::user();
        $tasks = Task::where('user_id', '=', $user->id)->get();
        return $tasks;
    }
    public function index()
    {
        $tasks = Task::all();
        return Inertia::render('Tasks');    
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'prazo' => 'required',
            'prioridade' => 'required',
        ]);

        # $dados = $request->all();
        # $dados['user_id'] = $user->id;

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->prazo = $request->input('prazo');
        $task->prioridade = $request->input('prioridade');
        $task->user_id = $user->id;
        $task->save();
        // Nota::create($dados);
        return Redirect::route('tasks');
    }

    public function show($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function destroyTask($id)
    {
        Task::findOrFail($id)->delete($id);
        return Redirect::route('tasks');
    }
}