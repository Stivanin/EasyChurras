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
    
    Route::get('convenios', 'ConveniosController@index');
    Route::get('convenios/novo', 'ConveniosController@novo');
    Route::post('convenios/salvar', 'ConveniosController@salvar');
    Route::get('convenios/{convenio}/editar', 'ConveniosController@editar');
    Route::get('convenios/{convenio}/visualizar', 'ConveniosController@visualizar');
    Route::patch('convenios/{convenio}', 'ConveniosController@atualizar');
    Route::delete('convenios/{convenio}', 'ConveniosController@deletar');
    
    Route::get('lojas', 'LojasController@index');
    Route::get('lojas/novo', 'LojasController@novo');
    Route::post('lojas/salvar', 'LojasController@salvar');
    Route::get('lojas/{loja}/editar', 'LojasController@editar');
    Route::get('lojas/{loja}/visualizar', 'LojasController@visualizar');
    Route::patch('lojas/{loja}', 'LojasController@atualizar');
    Route::delete('lojas/{loja}', 'LojasController@deletar');
    
    Route::get('relatorios', 'RelatoriosController@index');
    Route::get('relatorios/compras', 'RelatoriosController@compras');
    Route::post('relatorios/compras', 'RelatoriosController@gerar');
    Route::get('relatorios/gerar', 'RelatoriosController@gerar');


    Route::get('/home', 'HomeController@index');
});