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
    Route::get('/', ['as' => '/', 'uses' => 'HomeController@index']); //retirar após teste
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/servicos', ['as' => 'servicos', 'uses' => 'HomeController@index']);


    /** Projetos */
    /** Verb	    Path	                Action	    Route Name
        GET	        /projeto	            index	    projeto.index
        GET	        /projeto/create	        create	    projeto.create
        POST	    /projeto	            store	    projeto.store
        GET	        /projeto/{projeto}	    show	    projeto.show
        GET	        /projeto/{projeto}/edit	edit	    projeto.edit
        PUT/PATCH	/projeto/{projeto}	    update	    projeto.update
        DELETE	    /projeto/{projeto}	    destroy	    projeto.destroy */
    Route::resource('projeto', 'ProjetoController');

    /** Rotas de erro */    
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
});
