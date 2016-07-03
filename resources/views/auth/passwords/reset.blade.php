@extends('layouts.app')

@section('head')
    {{--Metatag for laravel 5.2--}}
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('content')
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" role="form" method="POST" action="{{ url('/password/reset') }}">

                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Esqueceu sua senha ?</h4>
                        <p class="center">Você pode reseta-la aqui!</p>
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div id="card-alert" class="card red ">
                        @foreach ($errors->all() as $error)
                            <div class="card-content white-text">
                                <p>{{ $error }}</p>
                            </div>
                            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        @endforeach
                    </div>
                @endif

                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ $email or old('email') }}">
                        <label for="email" class="center-align">E-mail</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password" class="form-control" name="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                        <label for="password_confirmation">Confirmação de senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">Resetar Senha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
