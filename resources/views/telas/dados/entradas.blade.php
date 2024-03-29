    <!-- Scripts DataTables -->

    @include('_partials.estilos')
    @include('_partials.cabecalho')
    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-demo.js') }}"></script>
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- DataTales Example -->
    <h3 style="text-align:center;padding-top:30px">Entradas</h3>
    @include('_partials.blocos_entradas')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table st class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>CPF</th>
                            <th>Veiculo</th>
                            <th>Referencia</th>
                            <th>Valor</th>
                            <th>Data Pagamento</th>
                            <th>2ª via</th>



                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                @php
                                    $valor = number_format(floatVal($produto->total), 2, ',', '.');
                                @endphp
                                <td>{{ $produto->cliente }}</td>
                                <td>{{ $produto->cpf }}</td>
                                <td>{{ $produto->veiculo }}</td>
                                <td>{{ $produto->referencia }}</td>
                                <td>R$ {{ $valor }}</td>
                                <td>{{ $produto->created_at }}</td>

                                <td>
                                    <a target="_blank" href="{{route('pdf.segundaE',$produto->id)}}">
                                        <i class="fas fa-print text-danger"></i>
                                    </a>
                                </td>


                                @include('_partials.btn_datatable')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
