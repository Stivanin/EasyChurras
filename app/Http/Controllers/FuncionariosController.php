<?php

namespace App\Http\Controllers;

use App\Funcionarios;
use Illuminate\Http\Request;

use App\Http\Requests;

class FuncionariosController extends Controller
{
    public function index () {
        $funcionarios = Funcionarios::get();
        return view('funcionarios.lista', ['funcionarios' => $funcionarios]);
    }
    public function novo () {
        return view('funcionarios.formulario');
    }
    
    public function salvar (Request $request) {
        
        $funcionario = new funcionarios();
        
        $funcionario->create($request->all());
        
        \Session::flash('mensagem_sucesso', 'Funcionário cadastrado com sucesso!');
        
        return redirect('funcionarios');
    }
    public function editar($id) {
        $funcionario = funcionarios::findOrFail($id);
        
        return view('funcionarios.formulario', ['funcionario' => $funcionario]);
    }
    public function atualizar($id, Request $request) {
        
            $funcionario = funcionarios::findOrFail($id);
            $funcionario->update($request->all());
            
            \Session::flash('mensagem_sucesso', 'Funcionário atualizado com sucesso!');

            return redirect('funcionarios/'.$funcionario->id.'/visualizar');

    }
    
    public function visualizar($id) {
        $funcionario = funcionarios::findOrFail($id);
        
        return view('funcionarios.visualizar', ['funcionario' => $funcionario]);
        }
        
    public function deletar($id) {
        $funcionario = funcionarios::findOrFail($id);
        
        $funcionario->delete();
        
        \Session::flash('mensagem_sucesso', 'Funcionário deletado com sucesso!');
        
        return Redirect('funcionarios');
        }
 
}