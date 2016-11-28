@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Preencha o formulário
                    <a class="pull-right" href="{{url('lojas') }}"> Listagem das Lojas Físicas</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                    @endif
                    
                    @if(Request::is('*/editar'))
                        {!!Form::model($lojas, ['method' => 'PATCH', 'url' => 'lojas/'.$lojas->id]) !!}
                        
                    @else
                    
                        {!!Form::open(['url' => 'lojas/salvar']) !!}
                        
                    @endif
                    
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome da Loja']) !!}
                    
                    {!!Form::label('endereco1', 'Endereço 1') !!}
                    {!! Form::input('string', 'endereco1', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Rua, Número, Bairro']) !!}
                    
                    {!!Form::label('endereco2', 'Endereço 2') !!}
                    {!! Form::input('string', 'endereco2', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'CEP, Cidade/Estado (abreviado)']) !!}
                    
                    {!!Form::label('funcionarios', 'Quantidade de Funcionários') !!}
                    {!! Form::input('string', 'funcionarios', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Quantidade de Funcionários']) !!}
                    
                    {!!Form::label('telefone', 'Telefone') !!}
                    {!! Form::input('string', 'telefone', null, ['class' => 'form-control', 'autofocus', 'placeholder' => '(XX)XXXX-XXXX']) !!}
                    
                    {!!Form::label('data', 'Data de Abertura') !!}
                    {!! Form::input('string', 'data', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XX/XX/XXXX']) !!}
                    
                    {!!Form::submit ('Salvar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection