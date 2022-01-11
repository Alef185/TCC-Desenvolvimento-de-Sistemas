<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Auth;

class NotaController extends Controller
{ 
    public function listnotes(){
        $user = Auth::user();
        $notas = Nota::where('user_id', '=', $user->id)->get();
        return $notas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();
        return Inertia::render('Notes');
        // return Inertia::render('Mostrar',['notas'=>$notas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('FormCriar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Auth::user();
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required'
        ]);

        # $dados = $request->all();
        # $dados['user_id'] = $user->id;

        $nota = new Nota();
        $nota->titulo = $request->input('titulo');
        $nota->conteudo = $request->input('conteudo');
        $nota->user_id = $user->id;
        $nota->save();
        // Nota::create($dados);
        return Redirect::route('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        return Inertia::render('FormEditar',['nota'=>$nota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        $nota->update($request->all());
        return Redirect::route('notas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroyNota($id)
    {
        Nota::findOrFail($id)->delete($id);
        return Redirect::route('notes');
    }
}
