<?php

namespace App\Http\Controllers;


use App\compras;
use Illuminate\Http\Request;
use App\Http\Requests;

class RelatoriosController extends Controller {

    public function index() {
        return view('relatorios.lista');
    }

    public function compras() {
        return view('relatorios.compras');
    }

    public function gerar(Request $request) {

        //dd($request->get('dataInicio'));

        $compras = \DB::table('estoques')
                ->where('data', '>=', $request->get('dataInicio'))
                ->where('data', '<=', $request->get('dataFim'))
                ->get();

        $soma=0;
        echo "<table>";
        foreach ($compras as $compra) { 
            echo "<tr><td>" . $compra->nome . "  -</td><td>" . $compra->quantidade . " -</td><td> R$ " . $compra->preco . "</td></tr>";
            $soma+=$compra->preco;  
            
        }
        echo "</table>";
            
            if ($soma == 0) {
               echo "Nenhuma compra foi feita no intervalo selecionado.";
            } 
            else {
                echo "Soma: R$ ".$soma;
            }
    }

}
