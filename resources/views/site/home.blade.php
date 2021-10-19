@extends('site.master.layout')

@section('content')
    <main class="py-3">
        <h1>Bem-Vindo(a)</h1>
        <p class="lead py-3">
            O mundo do Design Gráfico pode ser sempre fascinante, e aqui você encontrará um
            pouco do meu trabalho que eu amo e sou apaixonada por fazer.<br>
            Espero que vocês gostem e sintam-se a vontade pra voltar sempre que quiserem.<br>
            Aproveitem!!! ;)
        </p>
        <p class="lead">
            <a href="{{route('site.jobs')}}" class="btn btn-lg btn-secondary fw-bold border-white">Veja mais &raquo;</a>
        </p>
    </main>
@endsection
