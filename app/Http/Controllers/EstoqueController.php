<?php

namespace App\Http\Controllers;

use App\estoque;
use Illuminate\Http\Request;

use App\Http\Requests;

class EstoqueController extends Controller
{
public function index () {
        $estoque = estoque::get();
        return view('estoque.lista', ['estoque' => $estoque]);
        
    }
    
public function novo () {
        return view('estoque.formulario');
 
    }
    
public function salvar (Request $request) {
        
        $estoque = new estoque();
        
        $estoque->create($request->all());
        
        \Session::flash('mensagem_sucesso', 'Produto cadastrado com sucesso!');
        
        return redirect('estoque');
    }
   
public function editar($id) {
    
        $estoque = estoque::findOrFail($id);
        
        return view('estoque.formulario', ['estoque' => $estoque]);
    }
    
public function atualizar($id, Request $request) {
        
            $estoque = estoque::findOrFail($id);
            $estoque->update($request->all());
            
            \Session::flash('mensagem_sucesso', 'Produto atualizado com sucesso!');

            return redirect('estoque/'.$estoque->id.'/visualizar');      
    }

public function visualizar($id) {
    
        $estoque = estoque::findOrFail($id);
        
        return view('estoque.visualizar', ['estoque' => $estoque]);
    }
 
public function deletar($id) {
        $estoque = estoque::findOrFail($id);
        
        $estoque->delete();
        
        \Session::flash('mensagem_sucesso', 'Produto deletado com sucesso!');
        
        return Redirect('estoque');
        }
}