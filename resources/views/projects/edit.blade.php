@extends('layouts.app')

@section('content')
    <!--Form Advance-->
    <form method="post" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Editar Projeto</h4>

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
                                <input type="file" id="imagem" name="imagem" class="dropify" data-default-file="{{asset($project->image)}}" data-height="50"/>
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
                                <a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal1">
                                    <i class="mdi-image-add-to-photos left"></i>
                                    Add Tarefa
                                </a>

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

    {{-- Formulário para imagens --}}
    <form id="form_task_image" method="post" action="{{route('project.addtaskimage', $project->id)}}" enctype="multipart/form-data">

        {{csrf_field()}}

        {{-- Modal para as imagens --}}
        <div id="modal1" class="modal">
            <div class="modal-content">

                <div class="col s12 m12 l12">
                    <input class='with-gap' name='group' type='radio' id='groupImage' checked onchange='changeTypeTask();' value="groupImage" />
                    <label for='groupImage' >Imagem</label>
                    <input class='with-gap' name='group' type='radio' id='groupGalery' onchange='changeTypeTask();' value="groupGalery" />
                    <label for='groupGalery' >Galeria</label>
                    <input class='with-gap' name='group' type='radio' id='groupText' onchange='changeTypeTask();' value="groupText" />
                    <label for='groupText' >Texto</label>
                    <br>
                    <br>
                    <div class='col s12 m12 l12' style='display:block;' id='div_image'>
                        <input name='imagetask' id='imagetask' type='file' class='dropify' data-default-file='' data-height='150' ><br>
                    </div>

                    <div class="row">
                        <div class='col s12 m12 l12' style='display:none;' id='div_galery'>
                            <div class='col s6 m6 l6'>
                                <input name='galeryArray[]' id='galeryArray[]' type='file' class='dropify' data-default-file='' data-height='100' ><br>
                            </div>
                            <div class='col s6 m6 l6'>
                                <input name='galeryArray[]' id='galeryArray[]' type='file' class='dropify' data-default-file='' data-height='100' ><br>
                            </div>
                            <div class='col s6 m6 l6'>
                                <input name='galeryArray[]' id='galeryArray[]' type='file' class='dropify' data-default-file='' data-height='100' ><br>
                            </div>
                            <div class='col s6 m6 l6'>
                                <input name='galeryArray[]' id='galeryArray[]' type='file' class='dropify' data-default-file='' data-height='100' ><br>
                            </div>
                        </div>
                    </div>

                    <div  style='display:none;' id='div_text'>
                        <label for="text">Texto</label>
                        <input name='text' id='text' type='text' >
                    </div>
                </div>

                {{-- Div para criação de campos de imagens --}}
                <div class="row" id="div_image_origem"></div>
                <div class="row" id="div_image_destino"></div>

            </div>
            <div class="modal-footer">
                <button class="btn cyan waves-effect waves-light right modal-action modal-close" type="submit"
                        name="action">Salvar
                    <i class="mdi-content-send right"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    <script>
        /* dropfile com tradução */
        $('.dropify').dropify({
            messages: {
                default: 'Arraste e solte uma imagem aqui',
                replace: 'Arraste e solte uma imagem aqui para substituir',
                remove: 'Remover',
                error: 'Erro, imagem é muito grande'
            }
        });

        function changeTypeTask() {
            if(document.getElementById('groupImage').checked == true){
                document.getElementById('div_image').style.display = "block";
                document.getElementById('div_galery').style.display = "none";
                document.getElementById('div_text').style.display = "none";

            }
            if(document.getElementById('groupGalery').checked == true){
                document.getElementById('div_galery').style.display = "block";
                document.getElementById('div_image').style.display = "none";
                document.getElementById('div_text').style.display = "none";

            }
            if(document.getElementById('groupText').checked == true){
                document.getElementById('div_text').style.display = "block";
                document.getElementById('div_image').style.display = "none";
                document.getElementById('div_galery').style.display = "none";
            }
        }
    </script>
@endsection