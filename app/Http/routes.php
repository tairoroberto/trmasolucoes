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
    Route::get('/', ['as' => '/', 'uses' => 'ProjectController@index']); //retirar após teste
    Route::get('/home', ['as' => 'home', 'uses' => 'ProjectController@index']);
    Route::get('/projects', ['as' => 'projects', 'uses' => 'ProjectController@index']);



    /** Verb	    Path	                Action	    Route Name
        GET	        /project	            index	    project.index
        GET	        /project/create	        create	    project.create
        POST	    /project	            store	    project.store
        GET	        /project/{project}	    show	    project.show
        GET	        /project/{project}/edit	edit	    project.edit
        PUT/PATCH	/project/{project}	    update	    project.update
        DELETE	    /project/{project}	    destroy	    project.destroy */

    /** projects */
    Route::get('/project',                   ['as' => 'project.index', 'uses' => 'ProjectController@index', 'roles' => ['administrator', 'user']]);
    Route::get('/project/create',            ['as' => 'project.create', 'uses' => 'ProjectController@create', 'roles' => ['administrator']]);
    Route::post('/project',                  ['as' => 'project.store', 'uses' => 'ProjectController@store', 'roles' => ['administrator']]);
    Route::get('/project/{id}',              ['as' => 'project.show', 'uses' => 'ProjectController@show', 'roles' => ['administrator', 'user']]);
    Route::get('/project/{id}/edit',         ['as' => 'project.edit', 'uses' => 'ProjectController@edit', 'roles' => ['administrator', 'user']]);
    Route::put('/project/{id}',              ['as' => 'project.update', 'uses' => 'ProjectController@update', 'roles' => ['administrator']]);
    Route::delete('/project/{id}',           ['as' => 'project.destroy', 'uses' => 'ProjectController@destroy', 'roles' => ['administrator']]);
    Route::post('project/addtaskimage/{id}', ['as' => 'project.addtaskimage', 'uses' => 'ProjectController@addtaskimage', 'roles' => ['administrator']]);

    /* Preenche datatable de projetos */
    Route::get('/project-datatables',     ['as' => 'project.datatables', 'uses' => 'ProjectController@projectsDataTable', 'roles' => ['administrator', 'user']]);

    /* Buscar projetos pelo email do cliente */
    Route::post('/project/serch',         ['as' => 'project.search', 'uses' => 'ProjectController@buscarProjeto', 'roles' => ['administrator', 'user']]);

    /* Mostra a linha do tempo do projeto */
    //Route::get('/project-timeline',       ['as' => 'project.timeline', 'uses' => 'ProjectController@projectTimeline', 'roles' => ['administrator', 'user']]);*/

    /** Usuários */
    Route::get('/user',             ['as' => 'user.index', 'uses' => 'UserController@index', 'roles' => ['administrator']]);
    Route::get('/user/create',      ['as' => 'user.create', 'uses' => 'UserController@create', 'roles' => ['administrator']]);
    Route::post('/user',            ['as' => 'user.store', 'uses' => 'UserController@store', 'roles' => ['administrator']]);
    Route::get('/user/{id}',        ['as' => 'user.show', 'uses' => 'UserController@show', 'roles' => ['administrator']]);
    Route::get('/user/{id}/edit',   ['as' => 'user.edit', 'uses' => 'UserController@edit', 'roles' => ['administrator']]);
    Route::put('/user/{id}',        ['as' => 'user.update', 'uses' => 'UserController@update', 'roles' => ['administrator']]);
    Route::delete('/user/{id}',     ['as' => 'user.destroy', 'uses' => 'UserController@destroy', 'roles' => ['administrator']]);

    /* Preenche datatable de usuarios */
    Route::get('/user-datatables',     ['as' => 'user.datatables', 'uses' => 'UserController@usersDataTable', 'roles' => ['administrator']]);

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
