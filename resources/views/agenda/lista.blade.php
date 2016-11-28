@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Eventos
                    <a class="pull-right" href="{{url('agenda/novo') }}"> Cadastrar Evento</a>
                </div>
                
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                     Listagem de Clientes
                    <table class="table table-striped">
                        <th> Cliente </th>
                        <th> Data </th>
                        <th> Hora de Inicio </th>
                        <th> Hora de Encerramento </th>
                        <th> Ações </th>
                        <tbody>
                            @foreach($agenda as $agenda)
                            <tr>
                                <td>{{$agenda->nome}}</td>
                                <td>{{$agenda->data}}</td>
                                <td>{{$agenda->horainicio}}</td>
                                <td>{{$agenda->horafim}}</td>
                                <td>
                                    <a href="agenda/{{$agenda->id}}/visualizar" class="btn btn-default btn-sm"> Visualizar</a>
                                    <a href="agenda/{{$agenda->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    {!!Form::open(['method' => 'DELETE', 'url' => '/agenda/'.$agenda->id, 'style' => 'display: inline;'])!!}
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