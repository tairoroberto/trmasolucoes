@extends('layouts.app')

@section('content')
    <!--Form Advance-->
    <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Cadastro de Usuário</h4>

                    @if (count($errors) > 0)
                        <div id="card-alert" class="card red ">
                            @foreach ($errors->all() as $error)
                                <div class="card-content white-text">
                                    <p>{{ $error }}</p>
                                </div>
                                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&nbsp;×</span>
                                </button>
                            @endforeach
                        </div>
                @endif

                <!-- Form with icon prefixes -->
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="nome" name="nome" value="{{old('nome')}}" type="text">
                                            <label for="nome">Nome</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="sobrenome" name="sobrenome" value="{{old('sobrenome')}}" type="text">
                                            <label for="sobrenome">Sobrenome</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-communication-email prefix"></i>
                                            <input id="email" name="email" value="{{old('email')}}" type="email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-lock-outline prefix"></i>
                                            <input id="senha" name="senha" type="password">
                                            <label for="senha">Senha</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="mdi-action-lock-outline prefix"></i>
                                            <input id="senha_confirmation" name="senha_confirmation" type="password">
                                            <label for="senha_confirmation">Senha confirmação</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6 m6 l6">
                                            <input type="file" id="imagem" name="imagem" class="dropify"
                                                   data-default-file=""
                                                   value="{{ old('imagem') }}" data-height="50"/>
                                        </div>
                                        <div class="input-field col s6">
                                            <select id="tipo_usuario" name="tipo_usuario">
                                                <option value="" disabled selected>Tipo de usuário</option>
                                                <option value="2">Administrador</option>
                                                <option value="5">Cliente</option>
                                            </select>
                                            <label for="tipo_usuario">Tipo de usuário</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right"
                                                    type="submit" name="action">Salvar
                                                <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </form>
@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify({
                messages: {
                    default: 'Arraste e solte uma imagem aqui',
                    replace: 'Arraste e solte uma imagem aqui para substituir',
                    remove: 'Remover',
                    error: 'Erro, imagem é muito grande'
                }
            });
        });

        $("#float-action-button").css('display', 'none');
    </script>
@endsection