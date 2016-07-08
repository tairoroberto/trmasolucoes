<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get("/", function(){
    return Redirect::to("http://trmasolucoes.com.br/trma/");
});*/


Route::group(['middleware' => ['web']], function(){
    //route of login

    Route::auth();
    Route::get('/', ['as' => '/', 'uses' => 'ProjetoController@index']); //retirar após teste
    Route::get('/home', ['as' => 'home', 'uses' => 'ProjetoController@index']);
    Route::get('/projetos', ['as' => 'servicos', 'uses' => 'ProjetoController@index']);



    /** Verb	    Path	                Action	    Route Name
        GET	        /projeto	            index	    projeto.index
        GET	        /projeto/create	        create	    projeto.create
        POST	    /projeto	            store	    projeto.store
        GET	        /projeto/{projeto}	    show	    projeto.show
        GET	        /projeto/{projeto}/edit	edit	    projeto.edit
        PUT/PATCH	/projeto/{projeto}	    update	    projeto.update
        DELETE	    /projeto/{projeto}	    destroy	    projeto.destroy */

    /** Projetos */
    Route::get('/projeto',                ['as' => 'projeto.index', 'uses' => 'ProjetoController@index', 'roles' => ['administrator', 'user']]);
    Route::get('/projeto/create',         ['as' => 'projeto.create', 'uses' => 'ProjetoController@create', 'roles' => ['administrator']]);
    Route::post('/projeto',               ['as' => 'projeto.store', 'uses' => 'ProjetoController@store', 'roles' => ['administrator']]);
    Route::get('/projeto/{projeto}',      ['as' => 'projeto.show', 'uses' => 'ProjetoController@show', 'roles' => ['administrator', 'user']]);
    Route::get('/projeto/{projeto}/edit', ['as' => 'projeto.edit', 'uses' => 'ProjetoController@edit', 'roles' => ['administrator']]);
    Route::put('/projeto/{projeto}',      ['as' => 'projeto.update', 'uses' => 'ProjetoController@update', 'roles' => ['administrator']]);
    Route::delete('/projeto/{projeto}',   ['as' => 'projeto.destroy', 'uses' => 'ProjetoController@destroy', 'roles' => ['administrator']]);

    /** Usuários */
    Route::get('/usuer',              ['as' => 'usuer.index', 'uses' => 'UserController@index', 'roles' => ['administrator']]);
    Route::get('/usuer/create',       ['as' => 'usuer.create', 'uses' => 'UserController@create', 'roles' => ['administrator']]);
    Route::post('/usuer',             ['as' => 'usuer.store', 'uses' => 'UserController@store', 'roles' => ['administrator']]);
    Route::get('/usuer/{usuer}',      ['as' => 'usuer.show', 'uses' => 'UserController@show', 'roles' => ['administrator']]);
    Route::get('/usuer/{usuer}/edit', ['as' => 'usuer.edit', 'uses' => 'UserController@edit', 'roles' => ['administrator']]);
    Route::put('/usuer/{usuer}',      ['as' => 'usuer.update', 'uses' => 'UserController@update', 'roles' => ['administrator']]);
    Route::delete('/usuer/{usuer}',   ['as' => 'usuer.destroy', 'uses' => 'UserController@destroy', 'roles' => ['administrator']]);

});

/** Rotas de erro e Logout */
Route::get('404', function(){
    return view('errors.page-404');
});

Route::get('500', function(){
    return view('errors.page-500');
});

Route::get('sair', function(){
    \Auth::logout();
    return redirect('/home');
});
