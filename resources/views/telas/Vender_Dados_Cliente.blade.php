<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Venda de Veículo">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Vender_Dados_Cliente</title>

    <link rel="stylesheet" href="css\Vender_Dados_Cliente.css" media="screen">

     @include('_partials.estilos')

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Vender_Dados_Cliente">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
  @include('_partials.cabecalho')
    {{print_r($dados)}}
    
    <section class="u-align-center u-clearfix u-palette-4-dark-2 u-section-1" id="sec-883b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Venda de Veículo</h2>
                    <div class="u-align-center u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form"
                            style="padding: 0;" source="custom" name="form">
                            <div class="u-form-group u-form-partition-factor-2">
                                <label for="email-f18c" class="u-label u-label-1">Nome do Comprador</label>
                                <input type="text" placeholder="" id="email-f18c" name="cliente"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-1"
                                    required="required" autofocus="autofocus">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
                                <label for="text-9478" class="u-label u-label-2">CPF</label>
                                <input type="text" id="text-9478" name="cpf"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-2"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                                <label for="phone-57fc" class="u-label u-label-3">Telefone</label>
                                <input type="tel"
                                    pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                                    id="phone-57fc" name="phone"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-3"
                                    required="">
                            </div>
                            <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-4">
                                <label for="email-aaf8" class="u-label u-label-4">Email</label>
                                <input type="email" placeholder="Insira um endereço de email válido" id="email-aaf8"
                                    name="email"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-4"
                                    required="">
                            </div>
                            <div class="u-form-group u-form-partition-factor-4 u-form-group-5">
                                <label for="text-a585" class="u-label u-label-5">CEP</label>
                                <input type="text" placeholder="" id="text-a585" name="cep"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-5"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-4 u-form-group-6">
                                <label for="text-9dd8" class="u-label u-label-6">Rua</label>
                                <input type="text" placeholder="" id="text-9dd8" name="rua"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-6"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-4 u-form-group-7">
                                <label for="text-0817" class="u-label u-label-7">Numero</label>
                                <input type="text" placeholder="" id="text-0817" name="numero"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-7"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-4 u-form-group-8">
                                <label for="text-4a88" class="u-label u-label-8">Bairro</label>
                                <input type="text" placeholder="" id="text-4a88" name="bairro"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-8"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-9">
                                <label for="text-5420" class="u-label u-label-9">Cidade</label>
                                <input type="text" placeholder="" id="text-5420" name="cidade"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-9"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-10">
                                <label for="text-e8df" class="u-label u-label-10">Estado</label>
                                <input type="text" placeholder="" id="text-e8df" name="estado"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-10"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-11">
                                <label for="text-e86d" class="u-label u-label-11">Vendedor</label>
                                <input type="text" placeholder="" id="text-e86d" name="vendedor"
                                    class="u-border-1 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-11"
                                    required="required">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Continuar<br>
                                </a>
                                <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                            </div>
                            <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your
                                message has been sent. </div>
                            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your
                                message. Please fix errors then try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                        </form>
                    </div>
                    <a href="Página-Inicial.html" data-page-id="681112606"
                        class="u-border-none u-btn u-button-style u-hover-palette-2-light-1 u-palette-2-base u-btn-2">Cancelar</a>
                </div>
            </div>
        </div>
    </section>


    @include('_partials.rodape')
</body>

</html>
