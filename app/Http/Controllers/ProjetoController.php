<?php

namespace Trma\Http\Controllers;

use Illuminate\Http\Request;

use Trma\Http\Requests;
use Trma\Projetos;

class ProjetoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'roles']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_projeto' => 'required|max:255',
            'email_cliente' => 'required|email',
            'tipo_projeto' => 'required',
            'detalhes' => 'required',
        ]);


        $projeto = new Projetos();
        $projeto->name = $request->get('nome_projeto');
        $projeto->cliente_id = $request->get('id_cliente');
        $projeto->email_client = $request->get('email_cliente');
        $projeto->type_project = $request->get('tipo_projeto');
        $projeto->image = $request->get('imagem');
        $projeto->details = $request->get('detalhes');
        $projeto->save();

        return redirect('projetos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'projeto.show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'projects.edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'projects.update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'projects.delete';
    }
}
