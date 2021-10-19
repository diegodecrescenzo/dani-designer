<!doctype html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dani | Designer - WebPage</title>
    <link href="{{asset('images/logo1.png')}}" rel="icon">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom styles for this template -->
    <link href="{{url(mix('site/css/style.css'))}}" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white ">

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">


</div>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto align-self-items">
        <div>
            <a href="{{route('it.inizio')}}" class="float-md-start mb-0 logo">
                <img src="{{asset('images/logo3.png')}}" title="Home Page Dani Designer" alt="Home Page Dani Designer"/>
            </a>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link {{ (Route::current()->getName() === 'it.inizio'  ? 'active' : '') }}"
                   href="{{route('it.inizio')}}">Home</a>
                <a class="nav-link {{ (Route::current()->getName() === 'it.about' ? 'active' : '') }}"
                   href="{{route('it.about')}}">Chi Sono</a>
                <a class="nav-link {{ (Route::current()->getName() === 'it.lavori' ? 'active' : '') }}"
                   href="{{route('it.lavori')}}">Jobs</a>
                <a class="nav-link {{ (Route::current()->getName() === 'it.contact' ? 'active' : '') }}"
                   href="{{route('it.contact')}}">Contatto</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="d-flex mt-auto text-white-50">
        <small class="py-3">&copy; 2019 - {{date('Y')}} | <a href="{{route('it.terms')}}" class="terms">Termini d'Uso</a>.</small>
    </footer>
</div>

<script src="{{asset('site/js/jquery.js')}}"></script>
<script src="{{asset('site/js/boostrap.js')}}"></script>
<script src="{{asset('site/js/script.js')}}"></script>
</body>
</html>
