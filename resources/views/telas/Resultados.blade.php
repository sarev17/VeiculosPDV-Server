<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dados">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Resultados</title>
    
<link rel="stylesheet" href="{{asset('css/Resultados.css')}}" media="screen">
    @include('_partials.estilos')
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Resultados">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    @include('_partials.cabecalho')
    @include('_partials.js')
    <section class="u-align-center u-clearfix u-grey-15 u-section-1" id="sec-d8ab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Dados</h1>
        <p class="u-text u-text-default u-text-2">Consulte as informações de sua empresa</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="{{asset('images/2312686.png')}}" alt=""></span>
                <h4 class="u-text u-text-default u-text-3">Estoque</h4>
                <p class="u-text u-text-4">Liste/Edite/Exclua produtos cadastrados na base de dados</p>
                <a href="{{route('veiculos')}}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-2-base u-btn-1">Acessar</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img src="{{asset('images/1062868.png')}}" alt=""></span>
                <h4 class="u-text u-text-default u-text-5">Entradas</h4>
                <p class="u-text u-text-6">Pagamentos recebidos&nbsp;</p>
                <a href="{{route('entradas')}}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-2-base u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-icon-3"><img src="{{asset('images/3358799.png')}}" alt=""></span>
                <h4 class="u-text u-text-default u-text-7">Vendas</h4>
                <p class="u-text u-text-8">Relatorio de vendas , saldos e valores a receber.</p>
                <a href="{{route('vendas')}}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-2-base u-btn-3">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c86e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Amostra de texto. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>
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