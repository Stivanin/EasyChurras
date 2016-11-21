<?php

namespace App\Http\Controllers;

use App\convenios;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConveniosController extends Controller
{
   public function index () {
        $convenios = convenios::get();
        return view('convenios.lista', ['convenios' => $convenios]);
    }
    public function novo () {
        return view('convenios.formulario');
    }
    
    public function salvar (Request $request) {
        
        $convenio = new convenios();
        
        $convenio->create($request->all());
        
        \Session::flash('mensagem_sucesso', 'Convênios cadastrado com sucesso!');
        
        return redirect('convenios');
    }
    
    public function editar($id) {
    
        $convenios = convenios::findOrFail($id);
        
        return view('convenios.formulario', ['convenios' => $convenios]);
    }
    
    public function atualizar($id, Request $request) {
        
            $convenios = convenios::findOrFail($id);
            $convenios->update($request->all());
            
            \Session::flash('mensagem_sucesso', 'Produto atualizado com sucesso!');

            return redirect('convenios/'.$convenios->id.'/visualizar');      
    }

    public function visualizar($id) {
    
        $convenios = convenios::findOrFail($id);
        
        return view('convenios.visualizar', ['convenios' => $convenios]);
    }
 
    public function deletar($id) {
        $convenios = convenios::findOrFail($id);
        
        $convenios->delete();
        
        \Session::flash('mensagem_sucesso', 'Produto deletado com sucesso!');
        
        return Redirect('convenios');
        }
}
