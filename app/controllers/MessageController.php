<?php

class MessageController extends BaseController {

    public function getIndex()
    {
        return View::make('main');
    }

    public function getAddMessage()
    {
        return View::make('form')->withMessage(new Message());
    }

    public function postAddMessage()
    {

        // Решил что будет разумно добавить ограничение на заголовок сообщения.
        $validator = Validator::make(
            Input::only('title', 'text'),
            ['title' => 'required|min:1|max:100', 'text' => 'required|min:1|max:200'],  // про between знаю, но тогда нужно меня текст сообщения :)
            ['title.max' => 'Название сообщения не должно превышать 100 символов',
            'text.max' => 'Превышен лимит знаков в тексте сообщения',
            'required' => 'Нужно ввести хотя бы что-нибудь',
            'min' => 'Нужно ввести хотя бы что-нибудь']
        );

        if ($validator->fails()) {
            return Redirect::action('MessageController@getAddMessage')->withErrors($validator)->withInput();
        }

        Message::create(Input::all());

        return Redirect::action('MessageController@getMessages');
    }

    public function getMessages()
    {
        $messages = Message::latest()->take(3)->get();

        return View::make('messages')->withMessages($messages);
    }


}