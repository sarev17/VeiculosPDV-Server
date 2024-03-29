<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">VeiculosPDV</a><button
                        class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span
                            class="sr-only">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">

                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">VEICULOS</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">VENDER</a>
                                    <a class="dropdown-item" role="presentation" href="#">CADASTRAR</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">PAGAMENTO</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">RECEBER PAGAMENTO</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i
                                        class="fa fa-search"></i></label><input class="form-control search-field"
                                    type="search" name="search" id="search-field"></div>
                        </form><a class="btn btn-light action-button" role="button" href="#">Entrar</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container hero">

            @yield('conteudo')

        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
