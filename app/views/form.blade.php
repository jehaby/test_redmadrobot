@extends('layout')

@section('head')
    @parent
    <title>Новое сообщение</title>
@stop

@section('content')

    <div class="wrapper2">

        <a type="button" class="btn btn-link dtn-sm" href="{{action('MessageController@getIndex')}}"> На главную </a>

        {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
        <h1>Новое сообщение</h1>
        {{--</div>--}}

        {{--</div>--}}

        <p>
        <form class="form-horizontal" role="form" method="POST" action="{{ action('MessageController@postAddMessage')}}">
            <div class="form-group {{ $e = $errors->first('title') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="inputTitle">Название</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="title" id="inputTitle" value="{{ Input::old('title') }}"/>
                    <span class="help-block">{{ $errors->first('title') }}</span>
                </div>
            </div>

            <div class="form-group {{ $e = $errors->first('text') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="inputText">Текст</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="text" id="inputText" rows="4">{{ Input::old('text') }}</textarea>
                    <span class="help-block">{{ $errors->first('text') }}</span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Добавить</button>
                </div>
            </div>

            {{ Form::token() }}


        </form>
        </p>
    </div>
@stop

