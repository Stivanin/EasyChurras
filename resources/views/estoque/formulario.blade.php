@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Preencha o formulário
                    <a class="pull-right" href="{{url('estoque') }}"> Listagem de Produtos em estoque</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                    @endif
                    
                    @if(Request::is('*/editar'))
                        {!!Form::model($estoque, ['method' => 'PATCH', 'url' => 'estoque/'.$estoque->id]) !!}
                        
                    @else
                    
                        {!!Form::open(['url' => 'estoque/salvar']) !!}
                        
                    @endif
                    
                    {!!Form::label('codigo', 'Código do Produto') !!}
                    {!! Form::input('string', 'codigo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número do Contrato']) !!}
                    
                    {!!Form::label('tipo', 'Tipo do Produto') !!}
                    {!! Form::input('string', 'tipo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Alimentos/Bebidas/Acessórios/Equipamentos']) !!}
                    
                    {!!Form::label('quantidade', 'Quantidade') !!}
                    {!! Form::input('string', 'quantidade', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XX KG/CX/UN']) !!}
                    
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Produto']) !!}
                    
                    {!!Form::label('preco', 'Preço do Produto') !!}
                    {!! Form::input('string', 'preco', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'R$ XXX,XX']) !!}
                    
                    {!!Form::label('Data', 'Data de Entrada') !!}
                    {!! Form::input('string', 'data', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Data de entrada do produto (DD/MM/AAAA)']) !!}
                    
                    {!!Form::label('fornecedor', 'Nome do Fornecedor') !!}
                    {!! Form::input('string', 'fornecedor', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Fornecedor']) !!}
                    
                    {!!Form::label('observacoes', 'Observações sobre o Produto') !!}
                    {!! Form::input('string', 'observacoes', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Observações sobre o Produto']) !!}
                    
                    {!!Form::submit ('Salvar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection