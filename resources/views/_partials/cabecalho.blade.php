<div>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="{{ route('principal') }}">VeiculosPDV</a><button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span
                        class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" href="#">VEICULOS</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="{{ route('vender') }}"><i class="fas fa-comment-dollar"></i>VENDER</a>
                                <a class="dropdown-item" role="presentation"
                                    href="{{ route('cadastrar') }}"><i class="fas fa-boxes"></i>CADASTRAR</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" href="#">PAGAMENTO</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="{{ route('pagamento') }}"><i class="fas fa-file-invoice-dollar"></i>RECEBER
                                    PAGAMENTO</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" href="#">DADOS</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation"
                                    href="{{ route('veiculos') }}"><i class="fas fa-motorcycle"></i>ESTOQUE</a>
                                <a class="dropdown-item" role="presentation"
                                    href="{{ route('entradas') }}"><i class="fas fa-cart-arrow-down"></i>ENTRADAS</a>
                                <a class="dropdown-item" role="presentation" href="{{ route('vendas') }}"><i class="fas fa-database"></i>VENDAS</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" href="#">{{ $_SESSION['name'] }}</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" data-toggle="modal" data-target="#modalDados" href="#">DADOS DA EMPRESA</a>
                                <a class="dropdown-item" role="presentation" data-toggle="modal" data-target="#modalCookie1" href="#">CALCULO DE JUROS</a>
                                <a style="background-color:gray" class="dropdown-item" role="presentation" href="{{ route('logout') }}">SAIR</a>

                                @php
                                    if ($_SESSION['nivel'] == 'administrador') {
                                        echo   '<a class="dropdown-item" role="presentation" data-toggle="modal" data-target="#modalnovo" href="#">CADASTRAR
                                    USUARIO</a>';
                                    }
                                @endphp

                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @include('modals.juros');
    @include('modals.dados');
    @include('modals.novo');