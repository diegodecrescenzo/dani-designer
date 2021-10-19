@extends('it.master.layout-it')

@section('content')
    <div class="container">
        <div class="col-lg-12 my-3">
            <div class="about_img">
                <img src="{{asset('images/Dani2.jpg')}}" title="Daniele Anunciação Designer" alt="Daniele Anunciação Designer"/>
            </div>
        </div>
        <div class=" mx-auto py-2">
            <h2>Daniele Anunciação</h2>
            <p>Ciao!
                Sono una designer brasiliana, specializzata nella creazione di design sportivi e pubblicitari.
                Lavoro anche con Branding e Cancelleria.
                Il mio incontro con il Graphic Design è avvenuto poco tempo fa, ma è stato amore a prima vista, lol.
                Se sei come me, a cui piace un bel progetto, con obiettività, attenzione ai dettagli e tanta qualità,
                mettiti in contatto con me così possiamo creare qualcosa super <b> cool </b> insieme!!
            </p>
        </div>
        <p>
            <a target="_blank" class="btn btn-secondary" href="https://www.facebook.com/daniele.anuncicao"><i
                    class="fab fa-facebook fa-lg"></i></a>
            <a target="_blank" class="btn btn-secondary mx-5" href="https://www.instagram.com/dani.d.esigner/"><i
                    class="fab fa-instagram fa-lg"></i></a>
            <a target="_blank" class="btn btn-secondary" href="https://www.behance.net/danieleanuncia"><i
                    class="fab fa-behance-square fa-lg"></i></a>
        </p>
    </div>

@endsection
