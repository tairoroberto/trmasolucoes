@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">

            <form class="login-form" role="form" method="POST" action="{{ url('/password/email') }}">

                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Resetar Senha</h4>
                        <p class="center">Você pode resetar sua senha aqui!</p>
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
                        <input id="email" type="text" name="email" value="{{ old('email') }}">
                        <label for="email" class="center-align">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">Resetar Senha</button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin sign-up"><a href="{{ url('/login') }}">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
