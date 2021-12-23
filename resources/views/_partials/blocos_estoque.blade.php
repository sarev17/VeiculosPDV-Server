@php
    use App\Models\Veiculo;
    $compra = floatVal(Veiculo::select('compra')->sum('compra'));
    $venda = floatVal(Veiculo::select('venda')->sum('venda'));
    $lucro = $venda-$compra 
@endphp
<link rel="stylesheet" href="{{ asset('css\blocos_estoque.css') }}" media="screen">
<section class="u-clearfix u-white u-section-1" id="sec-f200">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-palette-1-base u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1">TOTAL DE VEICULOS</h3><span 
                class="u-file-icon u-icon u-text-white u-icon-1">
                    <img src="{{asset('images/car.png')}}" alt=""></span>
                        <span class="u-file-icon u-icon u-text-white u-icon-2">
                            <img src="{{asset('images/moto.png')}}" alt=""></span>
            <h3 class="u-text u-text-default u-text-2">{{Veiculo::where('produto','carro')->count()}}</h3>
            <h3 class="u-text u-text-default u-text-3">{{Veiculo::where('produto','moto')->count()}}</h3>
          </div>
        </div>
        <div class="u-container-style u-group u-palette-1-base u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h3 class="u-text u-text-4">TOTAL INVESTIDO</h3>
            <h3 class="u-text u-text-5">R$ {{number_format(floatVal(Veiculo::select('compra')->sum('compra')),2,',','.')}}</h3>
          </div>
        </div>
        <div class="u-container-style u-group u-palette-1-base u-shape-rectangle u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h3 class="u-text u-text-6">LUCRO PREVISTO</h3>
            <h3 class="u-text u-text-7">R$ {{number_format($lucro,2,',','.')}}</h3>
          </div>
        </div>
      </div>
    </section>
    
    