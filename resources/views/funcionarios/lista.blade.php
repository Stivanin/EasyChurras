@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Funcionários
                    <a class="pull-right" href="{{url('funcionarios/novo') }}"> Novo Funcionário</a>
                </div>
                
                <div class="panel-body">
                    Listagem de funcionários
                    <table class="table table-striped">
                        <th> Contrato </th>
                        <th> Nome </th>
                        <th> Endereço </th>
                        <th> CPF </th>
                        <th> Nascimento </th>
                        <th> RG </th>
                        <th> CTPS </th>
                        <th> Cargo </th>
                        <th> Salário </th>
                        <th> Vencimento </th>
                        <th> Telefone </th>
                        <th> Email </th>
                        <th> Hora de Serviço </th>
                        <th> Benefícios </th>
                        <th> Complemento </th>
                        <th>Opções</th>
                        <tbody>
                            @foreach($funcionarios as $funcionario)
                            <tr>
                                <td>{{$funcionario->contrato}}</td>
                                <td>{{$funcionario->nome}}</td>
                                <td>{{$funcionario->endeco}}</td>
                                <td>{{$funcionario->cpf}}</td>
                                <td>{{$funcionario->nascimento}}</td>
                                <td>{{$funcionario->rg}}</td>
                                <td>{{$funcionario->ctps}}</td>
                                <td>{{$funcionario->cargo}}</td>
                                <td>{{$funcionario->salario}}</td>
                                <td>{{$funcionario->vencimento}}</td>
                                <td>{{$funcionario->telefone}}</td>
                                <td>{{$funcionario->email}}</td>
                                <td>{{$funcionario->hora}}</td>
                                <td>{{$funcionario->beneficios}}</td>
                                <td>{{$funcionario->complemento}}</td>
                                <td>
                                    <a href="funcionarios/{{$funcionario->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    <a class="btn btn-default btn-sm"> Excluir</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection