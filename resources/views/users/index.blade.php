@extends('layouts.app')

@section('content')
    <!--Avatar Content-->
    <div class="row">
        <div class="col s12 m12 l12">
            <p class="header">Projetos</p>
        </div>

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

        <div class="col s12 m12 l12">
            <ul class="collection">
                <li class="collection-item avatar">
                    <a href="#!" ><img src="{{asset('images/avatar.jpg')}}" alt="" class="circle"></a>
                    <span class="title">Title</span></a>
                    <a href="#!" ><p>First Line
                        </p></a>
                    <a href="#!" class="secondary-content"><i class="mdi-content-send" style="font-size: 30px;padding-top: 5px"></i></a>
                </li>
                <li class="collection-item avatar">
                    <a href="#!" ><img src="{{asset('images/avatar.jpg')}}" alt="" class="circle"></a>
                    <span class="title">Title</span></a>
                    <a href="#!" ><p>First Line
                        </p></a>
                    <a href="#!" class="secondary-content"><i class="mdi-content-send" style="font-size: 30px;padding-top: 5px"></i></a>
                </li>
                <li class="collection-item avatar">
                    <a href="#!" ><img src="{{asset('images/avatar.jpg')}}" alt="" class="circle"></a>
                    <span class="title">Title</span></a>
                    <a href="#!" ><p>First Line
                        </p></a>
                    <a href="#!" class="secondary-content"><i class="mdi-content-send" style="font-size: 30px;padding-top: 5px"></i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="mdi-file-folder circle"></i>
                    <span class="title">Title</span>
                    <p>First Line
                        <br> Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">Title</span>
                    <p>First Line
                        <br> Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="mdi-av-play-arrow circle red"></i>
                    <span class="title">Title</span>
                    <p>First Line
                        <br> Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
            </ul>

        </div>
    </div>
@endsection