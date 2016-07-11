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
    Route::get('/project',                ['as' => 'project.index', 'uses' => 'ProjectController@index', 'roles' => ['administrator', 'user']]);
    Route::get('/project/create',         ['as' => 'project.create', 'uses' => 'ProjectController@create', 'roles' => ['administrator']]);
    Route::post('/project',               ['as' => 'project.store', 'uses' => 'ProjectController@store', 'roles' => ['administrator']]);
    Route::get('/project/{project}',      ['as' => 'project.show', 'uses' => 'ProjectController@show', 'roles' => ['administrator', 'user']]);
    Route::get('/project/{project}/edit', ['as' => 'project.edit', 'uses' => 'ProjectController@edit', 'roles' => ['administrator']]);
    Route::put('/project/{project}',      ['as' => 'project.update', 'uses' => 'ProjectController@update', 'roles' => ['administrator']]);
    Route::delete('/project/{project}',   ['as' => 'project.destroy', 'uses' => 'ProjectController@destroy', 'roles' => ['administrator']]);

    /** Usuários */
    Route::get('/user',             ['as' => 'user.index', 'uses' => 'UserController@index', 'roles' => ['administrator']]);
    Route::get('/user/create',      ['as' => 'user.create', 'uses' => 'UserController@create', 'roles' => ['administrator']]);
    Route::post('/user',            ['as' => 'user.store', 'uses' => 'UserController@store', 'roles' => ['administrator']]);
    Route::get('/user/{user}',      ['as' => 'user.show', 'uses' => 'UserController@show', 'roles' => ['administrator']]);
    Route::get('/user/{user}/edit', ['as' => 'user.edit', 'uses' => 'UserController@edit', 'roles' => ['administrator']]);
    Route::put('/user/{user}',      ['as' => 'user.update', 'uses' => 'UserController@update', 'roles' => ['administrator']]);
    Route::delete('/user/{user}',   ['as' => 'user.destroy', 'uses' => 'UserController@destroy', 'roles' => ['administrator']]);

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
