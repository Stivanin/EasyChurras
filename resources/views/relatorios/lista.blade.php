@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Emitir Relatórios
                </div>
                <div class="panel-body">
                    <table class="table table-striped" border="2">
                        <tr>
                            <th>Emitir Relatório de Compras: </th> 
                            <th><a href="relatorios/compras" class="btn btn-default btn-sm"> Emitir Relatório</a></th>
                        </tr>
                        <tr>
                            <th>Emitir Relatório de Pagamento: </th> 
                            <th><a href="" class="btn btn-default btn-sm"> Emitir Relatório</a></th>
                        </tr>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection