@component('mail::message')
    <h1>Olá Daniele,</h1>

    Meu nome é {{$user->firstName}} {{$user->lastName}}

    {{$user->message}}

    Meu e-mail para contato é {{$user->email}}

@endcomponent

