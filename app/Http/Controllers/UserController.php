<?php

namespace Trma\Http\Controllers;

use Illuminate\Http\Request;

use Trma\Http\Requests;
use Trma\User;

class UserController extends Controller
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
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'senha' => 'required|min:6|confirmed',
            'tipo_usuario' => 'required',
        ]);


        $user = new User();
        $imagem = null;
        $path = 'images/profiles/';
        $user->name = $request->get('nome');
        $user->last_name = $request->get('sobrenome');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('senha'));
        $user->role_id = $request->get('tipo_usuario');

        //change the name of photo for save in database
        if ($request->file('imagem') != null && $request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $ext = $request->file('imagem')->guessExtension();
            if($ext == ''){
                $ext = pathinfo($request->file('imagem')->getClientOriginalName(), PATHINFO_EXTENSION);
            }
            $imagem = md5(uniqid(time())) . "." . $ext;
            //move photo
            $request->file('imagem')->move($path, $imagem);
            $user->image = $path.$imagem;
        }

        $user->save();

        return redirect('user')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
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
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'email' => 'required|email|max:255',
            'senha' => 'required|min:6|confirmed',
            'tipo_usuario' => 'required',
        ]);


        $user = User::find($id);
        $imagem = null;
        $path = 'images/profiles/';
        $user->name = $request->get('nome');
        $user->last_name = $request->get('sobrenome');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('senha'));
        $user->role_id = $request->get('tipo_usuario');

        if($request->file('imagem') != null && $request->hasFile('imagem') && $path.$request->file('imagem')->getClientOriginalName() != $user->image && \File::exists($user->image)){
            \File::delete($user->image);
        }

        //change the name of photo for save in database
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $ext = $request->file('imagem')->guessExtension();
            if($ext == ''){
                $ext = pathinfo($request->file('imagem')->getClientOriginalName(), PATHINFO_EXTENSION);
            }
            $imagem = md5(uniqid(time())) . "." . $ext;
            //move photo
            $request->file('imagem')->move($path, $imagem);
            $user->image = $path.$imagem;
        }

        $user->save();

        return redirect('user')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
