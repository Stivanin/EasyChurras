@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Preencha o formulário
                    <a class="pull-right" href="{{url('funcionarios') }}"> Listagem de Funcionários</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                    @endif
                    @if(Request::is('*/editar'))
                        {!!Form::model($funcionario, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionario->id]) !!}
                    @else
                        {!!Form::open(['url' => 'funcionarios/salvar']) !!}
                    @endif
                    
                    {!!Form::label('contrato', 'Número do Contrato') !!}
                    {!! Form::input('string', 'contrato', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número do Contrato']) !!}
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}
                    {!!Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('string', 'endereco', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Endereço']) !!}
                    {!!Form::label('cpf', 'CPF') !!}
                    {!! Form::input('string', 'cpf', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XXX.XXX.XXX-XX']) !!}
                    {!!Form::label('nascimento', 'Data de Nascimento') !!}
                    {!! Form::input('string', 'nascimento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'AAAA-MM-DD']) !!}
                    {!!Form::label('rg', 'Número do RG') !!}
                    {!! Form::input('string', 'rg', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número']) !!}
                    {!!Form::label('ctps', 'Número Carteira de Trabalho') !!}
                    {!! Form::input('string', 'ctps', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'CTPS']) !!}
                    {!!Form::label('cargo', 'Cargo Ocupado') !!}
                    {!! Form::input('string', 'cargo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Cargo']) !!}
                    {!!Form::label('salario', 'Salário') !!}
                    {!! Form::input('string', 'salario', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Salário']) !!}
                    {!!Form::label('vencimento', 'Vencimento do Contrato') !!}
                    {!! Form::input('string', 'vencimento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'AAAA-MM-DD']) !!}
                    {!!Form::label('telefone', 'Telefone') !!}
                    {!! Form::input('string', 'telefone', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XXXXXXXX']) !!}
                    {!!Form::label('email', 'E-mail') !!}
                    {!! Form::input('string', 'email', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Email']) !!}
                    {!!Form::label('hora', 'Hora de Trabalho') !!}
                    {!! Form::input('string', 'hora', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XX AM/PM']) !!}
                    {!!Form::label('beneficios', 'Benefícios') !!}
                    {!! Form::input('string', 'beneficios', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Benefícios']) !!}
                    {!!Form::label('complemento', 'Complemento') !!}
                    {!! Form::input('string', 'complemento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Complemento']) !!}
                    
                    {!!Form::submit ('Cadastrar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection