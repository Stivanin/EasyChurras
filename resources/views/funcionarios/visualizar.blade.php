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
                                        <td>Contrato:</td>
                                        <td>{{$funcionario->contrato}}</td>
                                </tr>
                                <tr>
                                        <td>Nome:</td>
                                        <td>{{$funcionario->nome}}</td>
                                </tr>
                                <tr>
                                        <td>Endereço:</td>
                                        <td>{{$funcionario->endereco}}</td>
                                </tr>
                                <tr>
                                        <td>CPF:</td>
                                        <td>{{$funcionario->cpf}}</td>
                                </tr>
                                <tr>
                                        <td>Nascimento:</td>
                                        <td>{{$funcionario->nascimento}}</td>
                                </tr>
                                <tr>
                                        <td>RG:</td>
                                        <td>{{$funcionario->rg}}</td>
                                </tr>
                                <tr>
                                        <td>CTPS:</td>
                                        <td>{{$funcionario->ctps}}</td>
                                </tr>
                                
                                </table>
                                </td>
                                <td>
                                <table class="table table-striped" border="2">
                                <tr>
                                        <td>Cargo:</td>
                                        <td>{{$funcionario->cargo}}</td>
                                </tr>
                                <tr>
                                        <td>Salário:</td>
                                        <td>{{$funcionario->salario}}</td>
                                </tr>
                                <tr>
                                        <td>Vencimento:</td>
                                        <td>{{$funcionario->vencimento}}</td>
                                </tr>
                                <tr>
                                        <td>Telefone:</td>
                                        <td>{{$funcionario->telefone}}</td>
                                </tr>
                                <tr>
                                        <td>Email:</td>
                                        <td>{{$funcionario->email}}</td>
                                </tr>
                                <tr>
                                        <td>Hora de Serviço:</td>
                                        <td>{{$funcionario->hora}}</td>
                                </tr>
                                <tr>
                                        <td>Benefícios:</td>
                                        <td>{{$funcionario->beneficios}}</td>
                                </tr>
                                <tr>
                                        <td>Complemento:</td>
                                        <td>{{$funcionario->complemento}}</td>
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