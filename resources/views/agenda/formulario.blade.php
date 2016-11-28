@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do evento
                    <a class="pull-right" href="{{url('agenda') }}"> Agenda</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                        
                    @endif
                    
                    @if(Request::is('*/editar'))
                        {!!Form::model($agenda, ['method' => 'PATCH', 'url' => 'agenda/'.$agenda->id]) !!}
                        
                    @else
                    
                        {!!Form::open(['url' => 'agenda/salvar']) !!}
                        
                    @endif
                    
                    {!!Form::label('socio', 'Número de Sócio') !!}
                    {!! Form::input('string', 'socio', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de Sócio']) !!}
                    
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}
                    
                    {!!Form::label('data', 'Data do Evento') !!}
                    {!! Form::input('date', 'data', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'AAAA-MM-DD']) !!}
                    
                    {!!Form::label('horainicio', 'Hora de Inicio do Evento') !!}
                    {!! Form::input('string', 'horainicio', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Hora de Inicio do Evento']) !!}
                    
                    {!!Form::label('horafim', 'Hora de Encerramento do Evento') !!}
                    {!! Form::input('string', 'horafim', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Hora de Encerramento do Evento']) !!}
                    
                    {!!Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('string', 'endereco', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Endereço']) !!}
                    
                    {!!Form::label('produtos', 'Lista de Produtos Solicitado') !!}
                    {!! Form::input('text', 'produtos', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Produto - (Quantidade do produto); Nome do Produto 2 - (quantidade do produto)']) !!}
                    
                    {!!Form::label('complemento', 'Complemento') !!}
                    {!! Form::input('text', 'complemento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Informações adicionais para entrega']) !!}
                    
                    
                    {!!Form::submit ('Salvar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection