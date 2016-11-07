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
                                        <td>Numero do Sócio:</td>
                                        <td>{{$clientes->socio}}</td>
                                </tr>
                                <tr>
                                        <td>Nome:</td>
                                        <td>{{$clientes->nome}}</td>
                                </tr>
                                <tr>
                                        <td>Endereço:</td>
                                        <td>{{$clientes->endereco}}</td>
                                </tr>
                                <tr>
                                        <td>CPF:</td>
                                        <td>{{$clientes->cpf}}</td>
                                </tr>
                                <tr>
                                        <td>Nascimento:</td>
                                        <td>{{$clientes->nascimento}}</td>
                                </tr>
                                
                                </table>
                                </td>
                                <td>
                                <table class="table table-striped" border="2">
                                <tr>
                                        <td>RG:</td>
                                        <td>{{$clientes->rg}}</td>
                                </tr>       
                                <tr>
                                        <td>Telefone:</td>
                                        <td>{{$clientes->telefone}}</td>
                                </tr>
                                <tr>
                                        <td>Email:</td>
                                        <td>{{$clientes->email}}</td>
                                </tr>
                                <tr>
                                        <td>Complemento:</td>
                                        <td>{{$clientes->complemento}}</td>
                                </tr>
                                </table>
                                </td>
                        </tr>
                <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection