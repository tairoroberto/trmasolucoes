@extends('layouts.app')

@section('content')
    <!--Avatar Content-->
    <div class="row">
        <div class="col s12 m12 l12">
            <p class="header">Usuários</p>
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
                <?php $users = \Trma\User::all();?>
                @foreach($users as $user)
                        <li class="collection-item avatar">
                            <a href="{{route('user.edit', $user->id)}}" ><img src="{{($user->image) ? $user->image : asset('images/avatar.jpg')}}" alt="" class="circle"></a>
                            <a href="{{route('user.edit', $user->id)}}"><span class="title">{{$user->name}}</span> {{$user->last_name}}</a>
                            <p>{{(in_array($user->role_id, [1, 2, 3]) ) ? 'Administrador' : 'Cliente'}}</p>
                            <a href="{{route('user.edit', $user->id)}}" class="secondary-content"><i class="mdi-content-send" style="font-size: 30px;padding-top: 5px"></i></a>
                        </li>
                @endforeach

            </ul>

        </div>
    </div>
@endsection