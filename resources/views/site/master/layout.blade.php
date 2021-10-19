<!doctype html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dani | Designer - WebPage</title>
    <link href="images/logo1.png" rel="icon">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Icons FontAwesome -->
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
            <a href="{{route('site.home')}}" class="float-md-start mb-0 logo">
                <img src="images/logo3.png" title="Home Page Dani Designer" alt="Home Page Dani Designer"/>
            </a>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link {{ (Route::current()->getName() === 'site.home'  ? 'active' : '') }}"
                   href="{{route('site.home')}}">Home</a>
                <a class="nav-link {{ (Route::current()->getName() === 'site.about' ? 'active' : '') }}"
                   href="{{route('site.about')}}">Sobre</a>
                <a class="nav-link {{ (Route::current()->getName() === 'site.jobs' ? 'active' : '') }}"
                   href="{{route('site.jobs')}}">Jobs</a>
                <a class="nav-link {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}"
                   href="{{route('site.contact')}}">Contato</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="d-flex mt-auto text-white-50">
        <small class="py-3">&copy; 2019 - {{date('Y')}} | <a href="{{route('site.terms')}}" class="terms">Termos de
                Uso</a>.</small>
    </footer>
</div>

<script src="{{asset('site/js/jquery.js')}}"></script>
<script src="{{asset('site/js/boostrap.js')}}"></script>
<script src="{{asset('site/js/script.js')}}"></script>
</body>
</html>
