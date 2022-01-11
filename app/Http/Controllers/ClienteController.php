<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Auth;

class ClienteController extends Controller
{ 
    public function listclientes(){
        $user = Auth::user();
        $clientes = Cliente::where('user_id', '=', $user->id)->get();
        return $clientes;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return Inertia::render('Clientes');
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
            'name' => 'required',
            'detail' => 'required'
        ]);

        # $dados = $request->all();
        # $dados['user_id'] = $user->id;

        $cliente = new Cliente();
        $cliente->name = $request->input('name');
        $cliente->detail = $request->input('detail');
        $cliente->user_id = $user->id;
        $cliente->save();
        // Nota::create($dados);
        return Redirect::route('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return Inertia::render('FormEditar',['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return Redirect::route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroyCliente($id)
    {
        Cliente::findOrFail($id)->delete($id);
        return Redirect::route('clientes');
    }
}
