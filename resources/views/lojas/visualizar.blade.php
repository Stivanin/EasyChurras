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
                                        <td>Nome da Loja Física:</td>
                                        <td>{{$lojas->nome}}</td>
                                </tr>
                                <tr>
                                        <td>Endereço:</td>
                                        <td>{{$lojas->endereco1}}</td>
                                </tr>
                                <tr>
                                        <td>CEP e Cidade:</td>
                                        <td>{{$lojas->endereco2}}</td>
                                </tr>
                                <tr>
                                        <td>Quantidade de Funcionários:</td>
                                        <td>{{$lojas->funcionarios}}</td>
                                </tr>
                                <tr>
                                        <td>Telefone da Loja Física:</td>
                                        <td>{{$lojas->telefone}}</td>
                                </tr>
                                <tr>
                                        <td>Data de abertura:</td>
                                        <td>{{$lojas->data}}</td>
                                </tr>
                                
                                </table>
                                </td>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection