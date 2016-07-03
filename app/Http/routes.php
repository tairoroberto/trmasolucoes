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

Route::get("/", function(){
    return Redirect::to("http://trmasolucoes.com.br/trma/");
});


Route::group(['middleware' => ['web']], function(){
    //route of login

    Route::auth();
    Route::get('/home', ['as' => 'servicos', 'uses' => 'HomeController@index']);
    Route::get('/servicos', ['as' => 'servicos', 'uses' => 'HomeController@index']);

    Route::get('404', function(){
        return view('template.page-404');
    });

    Route::get('500', function(){
        return view('template.page-500');
    });

    Route::get('sair', function(){
        \Auth::logout();
        return redirect('/home');
    });
});
