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

 <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div style="width:10px" class="align-self-center">
                                        <i class="fas fa-calendar-day fa-3x "></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$hoje}}</h3>
                                        <span>Total de entradas: {{Pagamento::where('updated_at','>',$hojeI)->where('updated_at','<',$hojeF)->count()}}</span><br>
                                        <span>Total recebido: <b>R$ {{number_format(Pagamento::where('updated_at','>',$hojeI)->where('updated_at','<',$hojeF)->sum('total'),2,',','.')}}</b></span>
                                        <div style="padding:10px">
                                            <a href="{{route('pdf.diaE')}}" target="_blank"><i class="fas fa-file-pdf fa-2x text-danger"></i></a>
                                            &nbsp;<i class="fas fa-file-csv fa-2x text-info"></i>
                                        </div>
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
                                        <i class="fas fa-chart-pie fa-3x"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$mes[$numero_mes].' '.date('Y')}}</h3>
                                        <span>Total de entradas: {{Pagamento::where('updated_at','>',$mesI)->where('updated_at','<',$hojeF)->count()}}</span><br>
                                        <span>Total recebido: <b>R$ {{number_format(Pagamento::where('updated_at','>',$mesI)->where('updated_at','<',$hojeF)->sum('total'),2,',','.')}}</b></span>
                                        <div style="padding:10px">
                                            <a href="{{route('pdf.mesE')}}" target="_blank"><i class="fas fa-file-pdf fa-2x text-danger"></i></a>
                                            &nbsp;<i class="fas fa-file-csv fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

