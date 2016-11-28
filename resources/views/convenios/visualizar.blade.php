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
                                        <td>Nome do Convênio:</td>
                                        <td>{{$convenios->nome}}</td>
                                </tr>
                                <tr>
                                        <td>Vencimento do Convênio:</td>
                                        <td>{{$convenios->vencimento}}</td>
                                </tr>
                                <tr>
                                        <td>Desconto:</td>
                                        <td>{{$convenios->desconto}}</td>
                                </tr>      
                                </table>
                                </td>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection