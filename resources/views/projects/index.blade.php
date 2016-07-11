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
        @if(session('success'))
            <br>
            <br>
            <div id="card-alert" class="card green " style="overflow:visible; height: 60px">
                <div class="card-content white-text">
                    <p>{{ session('success') }}</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&nbsp;×</span>
                </button>
            </div>
        @endif

        <div class="col s12 m12 l12">
            <ul class="collection">
                <?php
                    if(in_array(Auth::user()->role_id, [1,2,3,4])){
                        $projects = \Trma\Project::all();
                    }else {
                        $projects = \Trma\Project::where('user_id', '=', Auth::user()->id)->get();
                    }
                ?>
                @foreach($projects as $project)
                    <?php $user = \Trma\User::where('email', '=', $project->email_client)->get()->first(); ?>
                    <li class="collection-item avatar">
                        <a href="{{route('project.edit', $project->id)}}"><img src="{{($project->image) ? $project->image : asset('images/avatar.jpg')}}" alt="" class="circle"></a>
                        <a href="{{route('project.edit', $project->id)}}"><span class="title">{{$project->name}}</span></a>
                        <p>
                            <a href="{{route('project.edit', $project->id)}}" class="white-text">
                                <div class="chip cyan white-text">
                                    <img src="{{($user->image)?asset($user->image):asset('images/avatar.jpg')}}" alt="{{$user->email}}">
                                    {{$user->name}} - {{$user->email}}
                                </div>
                            </a>
                        </p>
                        <p>{{ $project->details }}</p>
                        <a href="{{route('project.edit', $project->id)}}" class="secondary-content"><i class="mdi-content-send" style="font-size: 30px;padding-top: 5px"></i></a>
                    </li>
                @endforeach

            </ul>

        </div>
    </div>
@endsection