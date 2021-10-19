@extends('it.master.layout-it')

@section('content')

    <div class="col-md-8 mx-auto my-5">
        <h4 class="mb-4">Entri in contatto con me!</h4>
        <form class="pt-3" novalidate action="{{route('it.contact')}}" method="post">

            @csrf

            @if(Session::has('success'))
                <div class="email-success">
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('error'))
                <div class="email-error">
                    {{ Session::get('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="mb-2">Nome</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Nome"
                           value="{{old('firstName')}}">
                    @error('firstName')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                    @enderror

                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-2">Cognome</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Sobrenome"
                           value="{{old('lastName')}}">
                    @error('lastName')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="mb-2">Email</label>
                <input type="email" class="form-control" name="email" placeholder="seuemail@dominio.com.br"
                       value="{{old('email')}}">
                @error('email')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="mb-2">Titolo</label>
                <input type="text" class="form-control" name="subject" placeholder="Assunto"
                       value="{{old('subject')}}">
                @error('subject')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="mb-2">Messaggio</label>
                <textarea class="form-control" name="message" placeholder="Escreva aqui sua mensagem..."></textarea>
                @error('message')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <hr class="my-4">

            <button class="btn btn-secondary btn-block" type="submit">Inviare E-mail</button>

        </form>
    </div>

@endsection
