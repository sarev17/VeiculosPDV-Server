    <!-- Scripts DataTables -->

    @include('_partials.estilos')
    @include('_partials.cabecalho')
    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-demo.js') }}"></script>
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- DataTales Example -->
    <h3 style="text-align:center;padding-top:30px">Controle de usuários</h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table st class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Mensalidade</th>
                            <th>Data de vencimento</th>
                            <th>Dias restantes</th>
                            <th>Status</th>
                            <th>Açoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $user)
                            @php
                                if ($user->status == 'inativo') {
                                    $cor = 'gray';
                                } else {
                                    $cor = 'black';
                                }
                                
                            @endphp
                            <tr style="color:{{ $cor }}">
                                @php
                                    $mensalidade = number_format(floatVal($user->mensalidade), 2, ',', '.');
                                    $vencimento = $user->validade;
                                    $hoje = date('Y-m-d');
                                    $diferenca = strtotime($vencimento) -strtotime($hoje);
                                    $dias = floor($diferenca/(60*60*24));
                                    
                                @endphp
                                <td>{{ $user->name }}</td>
                                <td>R$ {{ $mensalidade }}</td>
                                <td>{{ $user->validade }}</td>
                                <td>{{ $dias}}</td>
                                <td>{{ $user->status }}</td>
                                <td style="background-color:white">
                                    <form method="POST" id="att" action="{{route('usuarios.update',['usuario'=>$user])}}">
                                        @php
                                            if ($user->status == 'ativo') {
                                                echo '<a href="' .
                                                    route('usuarios.ban', ['user' => $user, 'status' => 'inativo']) .
                                                    '"><i class="fas fa-ban text-danger mr-1"></i></a>';
                                            } else {
                                                echo '<a href="' .
                                                    route('usuarios.ban', ['user' => $user, 'status' => 'ativo']) .
                                                    '"><i class="fas fa-check-circle"></i></a>';
                                            }
                                        @endphp

                                        @csrf
                                        @method('PATCH')

                                        <input type="date" name="venc" id="venc" value="{{$user->validade}}">
                                        <a href="javascript:$('#att').submit();"><i style='color:green'
                                                class="fas fa-sync-alt mr-1"></i></a>
                                    </form>

                                </td>
                                @include('_partials.btn_datatable')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
