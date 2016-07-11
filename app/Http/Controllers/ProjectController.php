<?php

namespace Trma\Http\Controllers;

use Illuminate\Http\Request;

use Trma\Http\Requests;
use Trma\Project;
use Trma\Projetos;
use Trma\User;

class ProjectController extends Controller
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

        $projeto = new Project();
        $imagem = null;
        $path = 'images/projects/';

        $projeto->name = $request->get('nome_projeto');
        $projeto->email_client = $request->get('email_cliente');
        $projeto->type_project = $request->get('tipo_projeto');
        $projeto->details = $request->get('detalhes');

        $user = User::where('email', '=', $request->get('email_cliente'))->get()->first();
        $projeto->user_id = $user->id;

        //change the name of photo for save in database
        if ($request->file('imagem') != null && $request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $ext = $request->file('imagem')->guessExtension();
            if($ext == ''){
                $ext = pathinfo($request->file('imagem')->getClientOriginalName(), PATHINFO_EXTENSION);
            }
            $imagem = md5(uniqid(time())) . "." . $ext;
            //move photo
            $request->file('imagem')->move($path, $imagem);
            $projeto->image= $path.$imagem;
        }

        $projeto->save();

        return redirect('project')->with('success', 'Projeto cadastrado com sucesso!');
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
        $project = Project::find($id);

        return view('projects.edit', compact('project'));
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
        $this->validate($request, [
            'nome_projeto' => 'required|max:255',
            'email_cliente' => 'required|email',
            'tipo_projeto' => 'required',
            'detalhes' => 'required',
        ]);

        $projeto = Project::find($id);
        $imagem = null;
        $path = 'images/projects/';

        $projeto->name = $request->get('nome_projeto');
        $projeto->email_client = $request->get('email_cliente');
        $projeto->type_project = $request->get('tipo_projeto');
        $projeto->details = $request->get('detalhes');

        $user = User::where('email', '=', $request->get('email_cliente'))->get()->first();
        $projeto->user_id = $user->id;

        if($request->file('imagem') != null && $request->hasFile('imagem') && $path.$request->file('imagem')->getClientOriginalName() != $user->image && \File::exists($user->image)){
            \File::delete($user->image);
        }

        //change the name of photo for save in database
        if ($request->file('imagem') != null && $request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $ext = $request->file('imagem')->guessExtension();
            if($ext == ''){
                $ext = pathinfo($request->file('imagem')->getClientOriginalName(), PATHINFO_EXTENSION);
            }
            $imagem = md5(uniqid(time())) . "." . $ext;
            //move photo
            $request->file('imagem')->move($path, $imagem);
            $projeto->image= $path.$imagem;
        }

        $projeto->save();

        return redirect('project')->with('success', 'Projeto atualizado com sucesso!');
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
