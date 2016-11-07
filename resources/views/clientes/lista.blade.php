@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Clientes
                    <a class="pull-right" href="{{url('clientes/novo') }}"> Cadastrar Cliente</a>
                </div>
                
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                     Listagem de Clientes
                    <table class="table table-striped">
                        <th> Numero do Sócio </th>
                        <th> Nome </th>
                        <th> Ações </th>
                        <tbody>
                            @foreach($clientes as $clientes)
                            <tr>
                                <td>{{$clientes->socio}}</td>
                                <td>{{$clientes->nome}}</td>
                                <td>
                                    <a href="clientes/{{$clientes->id}}/visualizar" class="btn btn-default btn-sm"> Visualizar</a>
                                    <a href="clientes/{{$clientes->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    {!!Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$clientes->id, 'style' => 'display: inline;'])!!}
                                    <button type="submit" class="btn btn-default btn-sm"> Excluir</button>
                                    {!! Form::close() !!}
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