@extends('adminlte::master')

@section('adminlte_css')
    
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
           
            
                {!! Form::open(['method' => 'get', 'url' => '/ifexistsemail']) !!}
                    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' =>'Insira seu email corporativo GrupoMed' ] ) }}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
                

                
               
                <div class="row">
                    
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
                    </div>
                    <!-- /.col -->

                </div>
                {!! Form::close() !!}
            <div class="auth-links">
                <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                   class="text-center"
                >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                <br>
                <!--
                @if (config('adminlte.register_url', 'register'))
                    <a href="{{ url(config('adminlte.register_url', 'register')) }}"
                       class="text-center"
                    >{{ trans('adminlte::adminlte.register_a_new_membership') }}</a>
                @endif
                -->
                <a href="" class="text-center">Cadastrar novo membro</a>


            </div>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop

@section('adminlte_js')
    
    @yield('js')
@stop
