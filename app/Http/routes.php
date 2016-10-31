<?php


Route::get('usuarios', 'UsuarioController@index'); 

    Route::get('funcionarios', 'FuncionariosController@index'); 
    Route::get('funcionarios/novo', 'FuncionariosController@novo');
    Route::get('funcionarios/{funcionario}/editar', 'FuncionariosController@editar');
    Route::post('funcionarios/salvar', 'FuncionariosController@salvar'); 
    Route::patch('funcionarios/{funcionario}', 'FuncionariosController@atualizar'); 

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');

    Route::auth();

    Route::get('/home', 'HomeController@index');
});