@extends('layouts.app-login')

@section('content')
    <div id="error-page">

        <div class="row">
            <div class="col s12">
                <div class="browser-window">
                    <div class="top-bar">
                        <div class="circles">
                            <div id="close-circle" class="circle"></div>
                            <div id="minimize-circle" class="circle"></div>
                            <div id="maximize-circle" class="circle"></div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div id="site-layout-example-top" class="col s12">
                                <p class="flat-text-logo center white-text caption-uppercase">Desculpe-nos, não
                                    encontramos a página que você estava procurando :(</p>
                            </div>
                            <div id="site-layout-example-right" class="col s12 m12 l12">
                                <div class="row center">
                                    <h1 class="text-long-shadow col s12">500</h1>
                                </div>
                            </div>
                            <div class="row">
                                <p class="center red-text col s12">Isso mostra a págna que você estava procurando
                                    não existe :( </p>
                                <p class="center s12">
                                    <a href="{{url('/')}}" class="btn waves-effect waves-light">Página inicial</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection