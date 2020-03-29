<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Import css file -->
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <a href="/"> <!--LOGO--->
            <img class="fumec_logo" src="/images/FUMEC_logo.png" alt="Laravel">
        </a>
        <!-- Menu de navegação -->
        <nav id="menu" class="menu header_main">
            <ul>
                <li><a href="./index.html">HOME</a></li>
                <li><a href="./link.html">Links</a></li>
                <li><a href="./forms.html">Formulários</a></li>
                <li><a href="./ar.html">AR</a></li>
            </ul>
        </nav>
        <!-- Menu de navegação -->
    </header>



    <div class="container">
        <!-- Lista de Linguagens -->
        <div class=" jumbotron">
            <h1 class="display-2">@yield('cabecalho')</h1>
        </div>
        @yield('conteudo')
    </div>
</body>

</html>