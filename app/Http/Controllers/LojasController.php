<?php

namespace App\Http\Controllers;

use App\lojas;
use Illuminate\Http\Request;

use App\Http\Requests;

class LojasController extends Controller
{
public function index () {
        $lojas = lojas::get();
        return view('lojas.lista', ['lojas' => $lojas]);
        
    }
    
public function novo () {
        return view('lojas.formulario');
 
    }
    
public function salvar (Request $request) {
        
        $lojas = new lojas();
        
        $lojas->create($request->all());
        
        \Session::flash('mensagem_sucesso', 'Produto cadastrado com sucesso!');
        
        return redirect('lojas');
    }
   
public function editar($id) {
    
        $lojas = lojas::findOrFail($id);
        
        return view('lojas.formulario', ['lojas' => $lojas]);
    }
    
public function atualizar($id, Request $request) {
        
            $lojas = lojas::findOrFail($id);
            $lojas->update($request->all());
            
            \Session::flash('mensagem_sucesso', 'Produto atualizado com sucesso!');

            return redirect('lojas/'.$lojas->id.'/visualizar');      
    }

public function visualizar($id) {
    
        $lojas = lojas::findOrFail($id);
        
        return view('lojas.visualizar', ['lojas' => $lojas]);
    }
 
public function deletar($id) {
        $lojas = lojas::findOrFail($id);
        
        $lojas->delete();
        
        \Session::flash('mensagem_sucesso', 'Produto deletado com sucesso!');
        
        return Redirect('lojas');
        }
}