<?php

namespace App\Http\Controllers;

use App\agenda;
use Illuminate\Http\Request;
use App\Http\Requests;

class AgendaController extends Controller
{
    public function index () {
        $agenda = \App\agenda::get();
        return view('agenda.lista', ['agenda' => $agenda]);
    }
    
    public function novo () {
        return view('agenda.formulario');
    }
    
    public function salvar (Request $request) {
        
        $agenda = new \App\agenda();
        
        $agenda->create($request->all());
        
        \Session::flash('mensagem_sucesso', 'Evento cadastrado com sucesso!');
        
        return redirect('agenda');
    }
    
    public function editar($id)     {
        
        $agenda = \App\agenda::findOrFail($id);
        
        return view('agenda.formulario', ['agenda' => $agenda]);
    }
    
    public function atualizar($id, Request $request) {
        
            $agenda = \App\agenda::findOrFail($id);
            $agenda->update($request->all());
            
            \Session::flash('mensagem_sucesso', 'Evento atualizado com sucesso!');

            return redirect('agenda/'.$agenda->id.'/visualizar');

    }

    public function visualizar($id) {
        $agenda = \App\agenda::findOrFail($id);
        
          \Session::flash('mensagem_sucesso', 'Evento atualizado com sucesso!');
          
        return view('agenda.visualizar', ['agenda' => $agenda]);
        }
        
    public function deletar($id) {
        $agenda = \App\agenda::findOrFail($id);
        
        $agenda->delete();
        
        \Session::flash('mensagem_sucesso', 'Evento deletado com sucesso!');
        
        return Redirect('agenda');
        }
        
}