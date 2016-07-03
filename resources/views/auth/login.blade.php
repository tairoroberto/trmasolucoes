@extends('layouts.app')

@section('head')
    {{--Metatag for laravel 5.2--}}
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('content')

    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="{{asset('images/logo_colorfy.png')}}" alt=""
                             class="circle responsive-img valign profile-image-login" >
                        <p class="center login-form-text">Acompanhamento de projetos</p>
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
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                        <label for="email" class="center-align">E-mail</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" name="password" type="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember" name="remember"/>
                        <label for="remember">Lembre-me</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field s12 m12 l12">
                        <p class="margin right-align medium-small"><a href="{{ url('/password/reset') }}">Esqueceu a
                                senha
                                ?</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
