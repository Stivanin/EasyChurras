@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lojas Físicas
                    <a class="pull-right" href="{{url('lojas/novo') }}"> Cadastrar Loja</a>
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                    Listagem de Lojas
                    
                    <table class="table table-striped">
                        <th> Nome </th>
                        <th> Data de Abertura </th>
                        <th> Ações </th>
                        <tbody>
                            @foreach($lojas as $lojas)
                            <tr>
                                <td>{{$lojas->nome}}</td>
                                <td>{{$lojas->data}}</td>
                                <td>
                                    <a href="lojas/{{$lojas->id}}/visualizar" class="btn btn-default btn-sm"> Visualizar</a>
                                    <a href="lojas/{{$lojas->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    {!!Form::open(['method' => 'DELETE', 'url' => '/lojas/'.$lojas->id, 'style' => 'display: inline;'])!!}
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
