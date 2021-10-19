@extends('it.master.layout-it')

@section('content')
    <main class="py-3">
        <h1>BenVenuto(a)</h1>
        <p class="lead py-3">
            Il mondo del Graphic Design può essere sempre affascinante, e qui troverai un
            poco del mio lavoro, che amo e sono innamorata a farlo. <br>
            Spero che ti piaccia e sentiti libero di tornare quando vuoi. <br>
            Divertiti!!! ;)
        </p>
        <p class="lead">
            <a href="{{route('it.lavori')}}" class="btn btn-lg btn-secondary fw-bold border-white">Vedi &raquo;</a>
        </p>
    </main>
@endsection
