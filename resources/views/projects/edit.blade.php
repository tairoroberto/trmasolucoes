@extends('layouts.app')

@section('content')
    <!--Form Advance-->
    <form method="post" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Cadastro de Projeto</h4>

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

                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nome_projeto" type="text" name="nome_projeto"
                                       value="{{ $project->name }}">
                                <label for="nome_projeto">Nome do projeto</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <input id="email_cliente" type="email" name="email_cliente"
                                       value="{{ $project->email_client }}">
                                <label for="email_cliente">Email do cliente</label>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <?php $user = \Trma\User::where('email', '=', $project->email_client)->get()->first(); ?>
                                <input id="nome_cliente" type="text" name="nome_cliente" disabled="true"
                                       value="{{ $user->name }}">
                                <label for="nome_cliente">Nome do cliente</label>
                            </div>
                            <input id="id_cliente" type="hidden" name="id_cliente" value="{{ old('id_cliente') }}">
                        </div>
                        <div class="row">

                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <select id="tipo_projeto" name="tipo_projeto">
                                    <option value="{{$project->type_project}}">{{$project->type_project}}</option>
                                    <option value="1">WEB</option>
                                    <option value="2">MOBILE</option>
                                    <option value="3">SEO</option>
                                </select>
                                <label for="tipo_projeto">Tipo de Projeto</label>
                            </div>
                            <div class="col s6 m6 l6">
                                <input type="file" id="imagem" name="imagem" class="dropify" data-default-file="{{asset($project->image)}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                    <textarea id="detalhes" name="detalhes" class="materialize-textarea"
                                              length="120">{{ $project->details}}</textarea>
                                <label for="detalhes">Detalhes</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action">Salvar
                                    <i class="mdi-content-send right"></i>
                                </button>
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
            $('.dropify').dropify();
        });

        $("#float-action-button").css('display', 'none');
    </script>
@endsection