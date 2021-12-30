<div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="{{route('principal')}}">VeiculosPDV</a><button
                        class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span
                            class="sr-only">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">

                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">VEICULOS</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{ route('vender') }}">VENDER</a>
                                    <a class="dropdown-item" role="presentation" href="{{ route('cadastrar') }}">CADASTRAR</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">PAGAMENTO</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{ route('pagamento') }}">RECEBER PAGAMENTO</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">DADOS</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{route('veiculos')}}">ESTOQUE</a>
                                    <a class="dropdown-item" role="presentation" href="{{ route('entradas') }}">ENTRADAS</a>
                                    <a class="dropdown-item" role="presentation" href="{{ route('vendas') }}">VENDAS</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false" href="#">{{$_SESSION['name']}}</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{route('logout')}}">SAIR</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>