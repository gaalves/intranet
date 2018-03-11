{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Controle Acesso')

@section('content_header')
    <h1>Controlle de Acesso</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div style="padding: 10px;" class="panel-header"> <h1> Controle de Acesso </h1>
                        <button class="btn btn-primary btnAddUser"> asefa </button>
                    </div>

                    <div class="panel-body">
                        <table id="lista-usuarios" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Departamento</th>
                                <th>Role</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Departamento</th>
                                <th>Role</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/controleAcesso/global.js') }}"></script>

@stop