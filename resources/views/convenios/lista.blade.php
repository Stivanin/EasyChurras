@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Convênios
                    <a class="pull-right" href="{{url('convenios/novo') }}"> Cadastrar Convênio</a>
                </div>
                
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                    Listagem de Convênios
                    <table class="table table-striped">
                        <th> Nome </th>
                        <th> Ações </th>
                        <tbody>
                            @foreach($convenios as $convenios)
                            <tr>
                                <td>{{$convenios->nome}}</td>
                                <td>
                                    <a href="convenios/{{$convenios->id}}/visualizar" class="btn btn-default btn-sm"> Visualizar</a>
                                    <a href="convenios/{{$convenios->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    {!!Form::open(['method' => 'DELETE', 'url' => '/convenios/'.$convenios->id, 'style' => 'display: inline;'])!!}
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