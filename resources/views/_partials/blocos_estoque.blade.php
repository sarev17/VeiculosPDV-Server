@php
    use App\Models\Veiculo;
    $compra = floatVal(Veiculo::select('compra')->sum('compra'));
    $venda = floatVal(Veiculo::select('venda')->sum('venda'));
    $totalCarro = Veiculo::where('produto','=','Carro')->count();
    $totalMoto = Veiculo::where('produto','=','Moto')->count();
    $lucro = $venda-$compra 
@endphp
    
    <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div style="width:10px" class="align-self-center">
                                        <i class="fa fa-car fa-3x"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$totalCarro}}</h3>
                                        <span>Carros</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-motorcycle fa-3x"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$totalMoto}}</h3>
                                        <span>Motos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-wallet fa-3x" ></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>R$ {{number_format($compra,2,',','.')}}</h3>
                                        <span>Total investido</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-file-invoice-dollar fa-3x"></i></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>R$ {{number_format($lucro,2,',','.')}}</h3>
                                        <span>Lucro previsto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>