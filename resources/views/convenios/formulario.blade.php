@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Preencha o formulário
                    <a class="pull-right" href="{{url('convenios') }}"> Listagem de Convênios</a>
                </div>

                <div class="panel-body">
                    
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                    @endif
                    
                    @if(Request::is('*/editar'))
                        {!!Form::model($convenios, ['method' => 'PATCH', 'url' => 'convenios/'.$convenios->id]) !!}
                        
                    @else
                    
                        {!!Form::open(['url' => 'convenios/salvar']) !!}
                        
                    @endif

                    
                    {!!Form::label('nome', 'Nome') !!}
                    {!! Form::input('string', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Convênio']) !!}
                          
                    {!!Form::label('vencimento', 'Vencimento do Contrato') !!}
                    {!! Form::input('string', 'vencimento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'DD/MM/AAAA']) !!}
                    
                    {!!Form::label('desconto', 'Desconto em Porcentagem') !!}
                    {!! Form::input('string', 'desconto', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'XX']) !!}
                    
                    {!!Form::submit ('Salvar',['class'=>'btn btn-ptimary']) !!}
                    
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection