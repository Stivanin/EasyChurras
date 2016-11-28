@extends('layouts.app')

@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12     col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">         
                <table class="table table-striped" border="2">
                        <tr>
                                <td>
                                <table class="table table-striped" border="2">
                                <tr>
                                        <td>Numero do Sócio:</td>
                                        <td>{{$agenda->socio}}</td>
                                </tr>
                                <tr>
                                        <td>Nome:</td>
                                        <td>{{$agenda->nome}}</td>
                                </tr>
                                <tr>
                                        <td>Endereço:</td>
                                        <td>{{$agenda->data}}</td>
                                </tr>
                                <tr>
                                        <td>CPF:</td>
                                        <td>{{$agenda->horainicio}}</td>
                                </tr>
                                <tr>
                                        <td>Nascimento:</td>
                                        <td>{{$agenda->horafim}}</td>
                                </tr>
                                <tr>
                                        <td>Produtos:</td>
                                        <td>{{$agenda->produtos}}</td>
                                </tr>
                                <tr>
                                        <td>Complemento:</td>
                                        <td>{{$agenda->complemento}}</td>
                                </tr>
                                
                                </table>
                                </td>
                                
                        </tr>
                <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection