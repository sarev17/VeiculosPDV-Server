@php
use App\Models\Pagamento;
##Data
date_default_timezone_set ("America/Sao_Paulo");
$numero_dia = date('w') * 1;
$dia_mes = date('d');
$numero_mes = date('m') * 1;
$ano = date('Y');
$dia = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
$mes = ['', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$hoje = $dia_mes . ' de ' . $mes[$numero_mes];
$hojeI = date('Y-m-d')." 00:00:00";
$hojeF = date('Y-m-d')." 23:59:59";
$mesI = date('Y-m').'-01 00:00:00';

@endphp
<link rel="stylesheet" href="{{ asset('css\blocos_entradas.css') }}" media="screen">
<section class="u-clearfix u-white u-section-1" id="sec-f200">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-palette-4-dark-2 u-shape-rectangle u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h3 class="u-align-center u-text u-text-1">{{ $hoje }}</h3>
                <br>
                <h4 class="u-text u-text-2">Entradas: {{Pagamento::get()->where('updated_at','>',$hojeI)->where('updated_at','<',$hojeF)->count()}}</h4>
                <h4 class="u-text u-text-3">Recebido: R$ {{number_format(Pagamento::where('updated_at','>',$hojeI)->where('updated_at','<',$hojeF)->select('total')->sum('total'),2,',','.')}}</h4>
                <a href="{{route('pdf.diaE')}}"><span
                    class="u-file-icon u-icon u-icon-rounded u-palette-4-dark-2 u-spacing-10 u-text-white u-icon-1"><img
                        src="{{ asset('images/pdf.png') }}" alt=""></span></a>
            </div>
        </div>
        <div class="u-container-style u-group u-palette-4-dark-2 u-shape-rectangle u-group-2">
            <div class="u-container-layout u-container-layout-2">
                <h3 class="u-align-center u-text u-text-4">{{ $mes[$numero_mes] . ' de ' . $ano }}</h3>
                <br>
                <h4 class="u-text u-text-5">Entradas: {{Pagamento::where('updated_at','>',$mesI)->where('updated_at','<',$hojeF)->count()}} </h4>
                <h4 class="u-text u-text-6">Recebido: R$ {{number_format(Pagamento::where('updated_at','>',$mesI)->where('updated_at','<',$hojeF)->sum('total'),2,',','.')}}</h4><span
                    class="u-file-icon u-icon u-icon-rounded u-palette-4-dark-2 u-spacing-10 u-text-white u-icon-2"><img
                        src="{{ asset('images/pdf.png') }}" alt=""></span>
            </div>
        </div>
        <div class="u-container-style u-group u-palette-4-dark-2 u-shape-rectangle u-group-3">
            <div class="u-container-layout u-container-layout-3">
                <h3 class="u-align-center u-text u-text-7">Escolha as datas</h3>
                <div class="form">
                    <form>
                        <label class="u-text u-text-9">De: </label><input class="data" type="date">
                        <br><label class="u-text u-text-9">Até: </label><input class="data" type="date">
                        <span
                            class="u-file-icon u-icon u-icon-rounded u-palette-4-dark-2 u-spacing-10 u-text-white u-icon-3"><img
                                src="{{ asset('images/pdf.png') }}" alt=""></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
