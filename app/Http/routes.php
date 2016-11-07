<?php


Route::get('usuarios', 'UsuarioController@index'); 


Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');

    Route::auth();
    
    Route::get('funcionarios', 'FuncionariosController@index'); 
    Route::get('funcionarios/novo', 'FuncionariosController@novo');
    Route::get('funcionarios/{funcionario}/editar', 'FuncionariosController@editar');
    Route::post('funcionarios/salvar', 'FuncionariosController@salvar'); 
    Route::patch('funcionarios/{funcionario}', 'FuncionariosController@atualizar');
    Route::get('funcionarios/{funcionario}/visualizar', 'FuncionariosController@visualizar');
    Route::delete('funcionarios/{funcionario}', 'FuncionariosController@deletar');
    
    Route::get('clientes', 'ClientesController@index');
    Route::get('clientes/novo', 'ClientesController@novo');
    Route::post('clientes/salvar', 'ClientesController@salvar');
    Route::get('clientes/{cliente}/visualizar', 'ClientesController@visualizar');
    Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
    Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
    Route::delete('clientes/{cliente}', 'ClientesController@deletar');
    
    Route::get('estoque', 'EstoqueController@index');
    Route::get('estoque/novo', 'EstoqueController@novo');
    Route::post('estoque/salvar', 'EstoqueController@salvar');
    Route::get('estoque/{estoque}/editar', 'EstoqueController@editar');
    Route::get('estoque/{estoque}/visualizar', 'EstoqueController@visualizar');
    Route::patch('estoque/{estoque}', 'EstoqueController@atualizar');
    Route::delete('estoque/{estoque}', 'EstoqueController@deletar');

    Route::get('/home', 'HomeController@index');
});