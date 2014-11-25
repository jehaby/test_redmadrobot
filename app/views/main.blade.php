@extends('layout')

@section('head')
    @parent
    <title>Главная</title>
@stop

@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ action('MessageController@getMessages') }}" class="btn btn-primary btn-lg">
                    Показать сообщения
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <a href="{{ action('MessageController@getAddMessage') }}" class="btn btn-primary btn-lg">
                    Добавить сообщение
                </a>
            </div>
        </div>
    </div>

@stop
