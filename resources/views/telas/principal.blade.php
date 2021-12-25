<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Selecione um serviço">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Página Inicial</title>

    <link rel="stylesheet" href="{{ asset('css\Página-Inicial.css') }}" media="screen">
    @include('_partials.estilos')

<<<<<<< HEAD
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>

    

=======
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
>>>>>>> 92cc77266b8e153238a586251f88d4ac3a556825

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
</head>

<body class="u-body">

    @include('_partials.cabecalho')

    <section class="u-align-center u-clearfix u-section-1" id="carousel_12d8">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-align-center u-text u-text-1">Escolha um serviço</h2>
            <p class="u-text u-text-2">Cadastre seus produtos, efetue vendas e faça o levantamento de estoques e
                entradas.</p>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h4 class="u-text u-text-white u-text-3">Cadastrar produto</h4><span
                                class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-opacity u-opacity-55 u-text-black u-icon-1"
                                data-href="{{ route('cadastrar') }}" data-page-id="2222313748"><img src="images/2.png"
                                    alt=""></span>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-custom-item u-gradient u-list-item u-repeater-item u-video-cover u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <h4 class="u-text u-text-white u-text-4">Vender<br>Produto
                            </h4><span
                                class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-opacity u-opacity-55 u-text-black u-icon-2"
                                data-href="{{ route('vender') }}" data-page-id="97698535"><img src="images/3.png"
                                    alt=""></span>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-repeater-item u-video-cover u-list-item-3">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <h4 class="u-text u-text-white u-text-5">Receber pagamento</h4><span
                                class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-opacity u-opacity-55 u-text-black u-icon-3"
                                data-href="{{ route('pagamento') }}" data-page-id="268711124"><img src="images/4.png"
                                    alt=""></span>
                        </div>
                    </div>

                    <div
                        class="u-align-center u-container-style u-custom-item u-gradient u-list-item u-repeater-item u-video-cover u-list-item-5">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                            <h4 class="u-text u-text-white u-text-7">Simular<br>
                            </h4><span
                                class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-opacity u-opacity-55 u-text-black u-icon-5"
                                data-href="https://nicepage.com"><img src="images/677109.png" alt=""></span>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-custom-item u-gradient u-list-item u-repeater-item u-video-cover u-list-item-4">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                            <h4 class="u-text u-text-white u-text-6">Dados
                            </h4><span
                                class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-opacity u-opacity-55 u-text-black u-icon-4"
                                data-href="{{ route('dado') }}" data-page-id="147209408"><img src="images/5.png"
                                    alt=""></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('modals.venda');




    </section>

    @include('_partials.rodape')

</body>

</html>
