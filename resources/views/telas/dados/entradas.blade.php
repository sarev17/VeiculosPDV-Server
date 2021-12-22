    <!-- Scripts DataTables -->

    @include('_partials.estilos')
    @include('_partials.cabecalho')
    <!-- DataTales Example -->
    <h3 style="text-align:center;padding-top:30px">Entradas</h3>
    <div class="card shadow mb-4">

        @php
            $hoje = date('Y-m-d');
            $inicioMes = date('Y') . '-' . date('m') . '-' . '-01';
            
        @endphp
        <div style="padding-left:50px" class="row">
            <div style="">
                <a href="{{ route('entradas.date', $inicioMes . 'd' . $hoje) }}"><button type="button"
                        class="btn btn-secondary">Esse mes</button></a>
            </div>
            <div style="padding-left:20px">
                <a href="{{ route('entradas.date', $hoje . 'd' . $hoje) }}"><button type="button"
                        class="btn btn-secondary">Hoje</button></a>
            </div>
            <form class="row">
                <div style="padding-left:60px" class="row">
                    <input style="height:40px" type="date" id="dataini" name="dataini">
                </div>
                <div style="padding-left:40px" class="row">
                    <input type="date" id="datafim" name="datafim">
                </div>
                <div style="padding-left:20px">
                    <a href="{{ route('entradas.date', $hoje . 'd' . $hoje) }}"><button type="button"
                            class="btn btn-secondary">Buscar</button></a>
                </div>
            </form>

        </div>

    </div>
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


                        <th>Ações</th>
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

                            @include('_partials.btn_datatable')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
