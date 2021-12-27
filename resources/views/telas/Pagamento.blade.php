<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pagamento">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Pagamento</title>

    <link rel="stylesheet" href="{{ asset('css\Pagamento.css') }}" media="screen">
    @include('_partials.estilos')

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Pagamento">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    @include('_partials.cabecalho')

    <section class="u-align-center u-clearfix u-palette-4-dark-2 u-section-1" id="sec-345f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Pagamento</h2>

                    <div class="u-align-center u-form u-form-1">
                        <form id="pagamento" target="_blank" action="{{ route('pagamento.salvar') }}" method="post">
                            @csrf
                            @include('_partials.formulario_pagamento')
                            @include('_partials.js')
                            <button id="btnPagamento" class="btn btn-primary">Salvar</button>
                            <a href="{{ route('principal') }}"> <button type="button"
                                    class="btn btn-secondary">Cancelar</button></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('_partials.rodape')

</body>

</html>
<script>
    $('#btnPagamento').click(function(){
        $('#pagamento').submit();
        $('#pagamento')[0].reset();
        alert('Pagamento Confirmado \nImprima o recibo')
        
    })
</script>
