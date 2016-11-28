@extends('layouts.app')

@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12     col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">         
                <table class="table table-striped" border="2">
                        <tr>
                                <td>
                                <table class="table table-striped" border="2">
                                <tr>
                                        <td>Código do Produto:</td>
                                        <td>{{$estoque->codigo}}</td>
                                </tr>
                                <tr>
                                        <td>Tipo do Produto:</td>
                                        <td>{{$estoque->tipo}}</td>
                                </tr>
                                <tr>
                                        <td>Quantidade:</td>
                                        <td>{{$estoque->quantidade}}</td>
                                </tr>
                                <tr>
                                        <td>Nome do Produto:</td>
                                        <td>{{$estoque->nome}}</td>
                                </tr>
                                
                                </table>
                                </td>
                                
                                <td>
                                <table class="table table-striped" border="2">
                                    
                                <tr>
                                        <td>Preço do Produto:</td>
                                        <td>{{$estoque->valor}}</td>
                                </tr>
                                <tr>
                                        <td>Data de Cadastramento:</td>
                                        <td>{{$estoque->data}}</td>
                                </tr>
                                <tr>
                                        <td>Fornecedor:</td>
                                        <td>{{$estoque->fornecedor}}</td>
                                </tr>
                                <tr>
                                        <td>Observações:</td>
                                        <td>{{$estoque->observacoes}}</td>
                                </tr>
                                
                        </tr>
                        
                <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection