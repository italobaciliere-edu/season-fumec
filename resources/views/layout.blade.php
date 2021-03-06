<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Import css file -->
    <title>@yield('title')</title>    
</head>

<body>
    <header id="header_main" class="header_main simetria">
        <!--LOGO--->
        <a href="/">
            <img class="fumec_logo" src="/images/FUMEC_logo.png" alt="Laravel">
        </a>
        <!--LOGO--->
        <!-- Menu de navegação -->
        <nav id="nav_header" class="menu">
            <!-- Itens Navegação -->
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./html">HTML</a></li>
                <li><a href="./javaScript">JavaScript</a></li>
                <li><a href="./css">CSS</a></li>
            </ul>
            <!-- Itens Navegação -->
        </nav>
        <!-- Menu de navegação -->
    </header>

    <section class="section_nav_left">
        <nav>
            <ul id=menu>
                @yield('navegação lateral')
            </ul>
        </nav>
    </section>

    <main class="header_main simetria">
        <div class="container">
            <!-- Lista de Linguagens -->
            <div class=" jumbotron">
                <h1 class="display-2">@yield('cabecalho')</h1>
            </div>
            @yield('conteudo')
        </div>
    </main>

    <!-- Jquery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Modo de importar um arquivo js da pasta public no Laravel -->
    <!-- Import Imputmask JS lib -->
    <script src="{{ asset('Inputmask/dist/jquery.inputmask.js') }}"></script>
    @yield('scripts')

</body>

</html>