@extends('layout')

@section('head')
    @parent
    <title>Сообщения</title>
@stop

@section('content')

    <div class="wrapper2">

        <a type="button" class="btn btn-link btn-sm" href="{{action('MessageController@getIndex')}}"> На главную </a>

        @if($messages->isEmpty())

            <div class="panel panel-default">
                <div class="panel-body">
                    Пока тут пусто, но можно <a href="{{ action('MessageController@getAddMessage') }}">добавить сообщение</a>
                </div>
            </div>

        @else

            @foreach($messages->all() as $message)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $message->title }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $message->text }}
                    </div>
                </div>
            @endforeach

        @endif
    </div>

@stop()
