    
<!-- Scripts DataTables -->

@include('_partials.estilos')
@include('_partials.cabecalho')
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatables/datatables-demo.js') }}"></script>
<link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
   <!-- DataTales Example -->
<h3 style="text-align:center;padding-top:30px">Vendas</h3>
<div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table st class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>CPF</th>
                                <th>Placa</th>
                                <th>Ano</th>
                                <th>Valor da Venda</th>
                                <th>Parcelas</th>
                                <th>Entrada</th>
                                <th>Mensalidade</th>
                                <th>Data da venda</th>


                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                @php
                                    $valor = number_format(floatVal($produto->total),2,',','.');
                                    $mensalidade = number_format(floatVal($produto->mensalidade),2,',','.');
                                    $entrada = number_format(floatVal($produto->entrada),2,',','.');
                                @endphp
                                    <td>{{ $produto->cliente }}</td>
                                    <td>{{ $produto->cpf }}</td>
                                    <td>{{ $produto->placa }}</td>
                                    <td>{{ $produto->fabricacao }}</td>
                                    <td>R$ {{$valor }}</td>
                                    <td>{{$produto->pagas}}/{{$produto->parcelas}}</td>
                                    <td>R$ {{$entrada }}</td>
                                    <td>R$ {{$mensalidade}}</td>
                                    <td>{{ $produto->updated_at }}</td>
                                    @include('_partials.btn_datatable')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>