<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Venda de Veículo">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Vender</title>

    <link rel="stylesheet" href="css\Vender.css" media="screen">
    @include('_partials.estilos')
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Vender">
    <meta property="og:type" content="website">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
</head>

<body class="u-body">
    @include('_partials.cabecalho')
    <section class="u-align-center u-clearfix u-palette-4-dark-2 u-section-1" id="sec-9be9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Venda de Veículo</h2>
                    <div class="u-align-center u-form u-form-1">

                        @include("_partials.js")
                        <form action="{{route('venda.salvar')}}" method="post">
                            @csrf
                            @include('_partials.formulario_venda')
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPush">Continuar</button>
                            <a href="{{ route('principal') }}"> <button type="button"
                                    class="btn btn-secondary">Cancelar</button></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c86e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Amostra de texto. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
            <span>Website Templates</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="" target="_blank">
            <span>Website Builder Software</span>
        </a>.
    </section>
</body>

</html>
