<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
    public function chat()
    {
        return Inertia::render('Chat');
    }
    public function tasks()
    {
        return Inertia::render('Tasks');
    }
    public function notes()
    {
        return Inertia::render('Notes');
    }
    public function notas()
    {
        return Inertia::render('Notas');
    }
    public function clientes()
    {
        return Inertia::render('Clientes');
    }
}
