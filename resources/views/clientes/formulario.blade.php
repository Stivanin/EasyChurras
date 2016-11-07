@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do cliente
                    <a class="pull-right" href="{{url('clientes') }}"> Listagem de Clientes</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                        
                    @endif
                    
                    @if(Request::is('*/editar'))
                        {!!Form::model($clientes, ['method' => 'PATCH', 'url' => 'clientes/'.$clientes->id]) !!}
                        
                    @else
                    
                        {!!Form::open(['url' => 'clientes/salvar']) !!}
                        
                    @endif
                    
                    {!!Form::label('socio', 'Número de Sócio') !!}
                    {!! Form::input('string', 'socio', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de Sócio']) !!}
                    
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}
                    
                    {!!Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('string', 'endereco', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Endereço']) !!}
                    
                    {!!Form::label('cpf', 'CPF') !!}
                    {!! Form::input('string', 'cpf', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XXX.XXX.XXX-XX']) !!}
                    
                    {!!Form::label('nascimento', 'Data de Nascimento') !!}
                    {!! Form::input('string', 'nascimento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'DD/MM/AAAA']) !!}
                    
                    {!!Form::label('rg', 'Número do RG') !!}
                    {!! Form::input('string', 'rg', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número']) !!}
                    
                    {!!Form::label('telefone', 'Telefone') !!}
                    {!! Form::input('string', 'telefone', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XXXXXXXX']) !!}
                    
                    {!!Form::label('email', 'E-mail') !!}
                    {!! Form::input('string', 'email', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Email']) !!}
                    
                    {!!Form::label('complemento', 'Complemento') !!}
                    {!! Form::input('string', 'complemento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Complemento']) !!}
                    
                    {!!Form::submit ('Salvar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection