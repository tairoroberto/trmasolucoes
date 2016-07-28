<?php

namespace Trma\Http\Controllers;

use Illuminate\Http\Request;
use Trma\Project;
use Trma\ProjecTaskImage;
use Trma\User;
use Yajra\Datatables\Facades\Datatables;

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
       $validator = \Validator::make($request->all(), [
            'nome_projeto' => 'required|max:255',
            'email_cliente' => 'required|email',
            'tipo_projeto' => 'required',
            'detalhes' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/project/create')
                ->withErrors($validator)
                ->withInput();
        }

        $projeto = new Project();
        $imagem = null;

        $projeto->name = $request->get('nome_projeto');
        $projeto->email_client = $request->get('email_cliente');
        $projeto->type_project = $request->get('tipo_projeto');
        $projeto->details = $request->get('detalhes');

        $user = User::where('email', '=', $request->get('email_cliente'))->get()->first();
        $projeto->user_id = $user->id;
        $projeto->save();
        $projeto = Project::where('user_id', '=', $user->id)
                            ->where('name', '=', $request->get('nome_projeto'))
                            ->get()->first();

        $path = 'images/projects/project_'.$projeto->id.'/';
        if(!is_dir($path)){
            mkdir($path);
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
        $project = Project::find($id);
        return view('projects.timeline', compact('project'));
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

        /** Se for o admin pode editar, senão só mostra o andamento do projeto */
        if(in_array(\Auth::user()->role_id, [1,2,3,4])){
            return view('projects.edit', compact('project'));
        }else {
            /** (show) project/{id} */
            return redirect('project/'.$id);
        }
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
        $validator = \Validator::make($request->all(), [
            'nome_projeto' => 'required|max:255',
            'email_cliente' => 'required|email',
            'tipo_projeto' => 'required',
            'detalhes' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect("/project/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $projeto = Project::find($id);
        $imagem = null;

        $path = 'images/projects/project_'.$projeto->id.'/';
        if(!is_dir($path)){
            mkdir($path);
        }

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

    /** *************************************************************************************/
    /**                               Ações dos projetos                                   */
    /** ***********************************************************************************/

    /** Retorna todos os usuarios para preencher a datatable
     * @return
     */
    public function projectsDataTable(){

        if(in_array(\Auth::user()->role_id, [1,2,3,4])){
            $projects = Project::all();
        }else {
            $projects = Project::where('user_id', '=', \Auth::user()->id)->get();
        }

        return Datatables::of($projects)
            ->addColumn('details', function ($project) {
                $user = User::where('email', '=', $project->email_client)->get()->first();
                return '
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <a href="'.route('project.edit', $project->id).'"><img src="'.(($project->image && \File::exists($project->image)) ? asset($project->image) : asset('images/avatar.jpg')).'" alt="" class="circle"></a>
                            <a href="'.route('project.edit', $project->id).'"><p>'. $project->name.'</p></a>
                            <p>
                                <a href="'.route('project.edit', $project->id).'" class="white-text">
                                    <div class="chip cyan white-text">
                                        <img src="'.(($user->image && \File::exists($user->image))?asset($user->image):asset('images/avatar.jpg')).'" alt="'.$user->email.'">
                                        '.$user->name.' - '.$user->email.'
                                    </div>
                                </a>
                            </p>                            
                            <a href="'.route('project.edit', $project->id).'"><p>'. $project->details .'</p></a>                            
                            <a href="'.route('project.edit', $project->id).'" class="secondary-content" title="Visualizar projeto"><i class="mdi-content-send" style="font-size: 35px;padding-top: 20px"></i></a>
                        </li>
                    </ul>';
            })->make(true);
    }

    public function buscarProjeto(Request $request) {
        return $request->get('search');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addtaskimage(Request $request, $id)
    {
        try{
            $projeto = Project::find($id);
            $imagem = null;
            $path = 'images/projects/project_'.$projeto->id.'/';

            if(!is_dir($path)){
                mkdir($path);
            }

            /** Verifica se há imagem para salvar no banco de dados */
            if($request->get('group') != null && $request->get('group') == 'groupImage'){
                //Move a imagem e salva no banco de dados o caminho
                if ($request->file('imagetask') != null && $request->hasFile('imagetask') && $request->file('imagetask')->isValid()){
                    $taskimage = new ProjecTaskImage();
                    $ext = $request->file('imagetask')->guessExtension();
                    if($ext == ''){
                        $ext = pathinfo($request->file('imagetask')->getClientOriginalName(), PATHINFO_EXTENSION);
                    }
                    $imagem = md5(uniqid(time())) . "." . $ext;
                    //move photo
                    $request->file('imagetask')->move($path, $imagem);

                    //Adiciona no modal para salvar no banco
                    $taskimage->image= $path.$imagem;
                    $taskimage->project_id = $projeto->id;
                    $taskimage->type_task = 'image';

                    /** Salva no banco de dados */
                    $taskimage->save();
                }
            }


            /** Verifica se tem imagens no array para a galeria */
            if($request->get('group') != null && $request->get('group') == 'groupGalery'){
                $arrayImages = [];
                $taskimage = new ProjecTaskImage();

                if($request->file('galeryArray') != null && $request->hasFile('galeryArray')){

                    //Move a imagem e salva no banco de dados o caminho
                    foreach ($request->file('galeryArray') as $image){
                        if($image != null){

                            if ($image->isValid()){
                                $ext = $image->guessExtension();
                                if($ext == ''){
                                    $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                                }
                                $imagem = md5(uniqid(time())) . "." . $ext;
                                //move photo
                                $image->move($path, $imagem);

                                //Adiciona no modal para salvar no banco
                                $arrayImages[] = $path.$imagem;
                            }
                        }
                    }

                    //Adiciona no modal para salvar no banco
                    $taskimage->galery = implode(',', $arrayImages);
                    $taskimage->project_id = $projeto->id;
                    $taskimage->type_task = 'galery';

                    /** Salva no banco de dados */
                    $taskimage->save();
                }
            }

            /** Verifica se há imagem para salvar no banco de dados */
            if($request->get('group') != null && $request->get('group') == 'groupText'){
                //Move a imagem e salva no banco de dados o caminho
                if ($request->get('text') != null ){

                    $taskimage = new ProjecTaskImage();

                    //Adiciona no modal para salvar no banco
                    $taskimage->text= $request->get('text');
                    $taskimage->project_id = $projeto->id;
                    $taskimage->type_task = 'text';

                    /** Salva no banco de dados */
                    $taskimage->save();
                }
            }

            return redirect('project')->with('success', 'Imagens adicionadas com sucesso!');

        }catch (\Exception $e){
            return redirect("/project/{$id}/edit")
                        ->with('errors', 'Falha ao salvar tarefa!');
        }
    }
}
