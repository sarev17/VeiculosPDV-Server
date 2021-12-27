    <!-- Scripts DataTables -->

    @include('_partials.estilos')
    @include('_partials.cabecalho')

    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-demo.js') }}"></script>
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- DataTales Example -->
    <h3 style="text-align:center;padding-top:30px">Consulta Estoque</h3>
    @include('_partials.blocos_estoque')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table st class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th>Ano</th>
                            <th>Valor</th>

                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                @php
                                    $valor = number_format(floatVal($produto->venda), 2, ',', '.');
                                @endphp
                                <td>{{ $produto->produto }}</td>
                                <td>{{ $produto->placa }}</td>
                                <td>{{ $produto->marca }}</td>
                                <td>{{ $produto->modelo }}</td>
                                <td>{{ $produto->cor }}</td>
                                <td>{{ $produto->fabricacao }}</td>
                                <td>R$ {{ $valor }}</td>

                                <td>

                                    <a href="{{ route('vender', $produto->id) }}"><i
                                            class="fas fa-shopping-cart"></i></a>
                                    <a href="{{ route('editar_veiculo', $produto) }}"><i
                                            class="fas fa-edit text-info mr-1"></i></a>
                                    <a href="{{ route('veiculo.delete', $produto->id) }}"><i
                                            class="fas fa-trash text-danger mr-1"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
