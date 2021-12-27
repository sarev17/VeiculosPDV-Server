<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamentos</title>

<style>
    table {
        margin: auto;
        font-size:10pt;
    }
    .center{
        text-align:center;
    }
</style>

</head>

<body>
    <h1 class="center">Pagamentos Registrados</h1><br>
    <table>
        <tr>
            <td>CLIENTE</td>
            <td>PRODUTO</td>
            <td>DESCRIÇÃO</td>
            <td>VALOR</td>
            <td>DATA</td>
        </tr>
        @foreach ($produtos as $produto)
                            <tr>
                                @php
                                    $valor = number_format(floatVal($produto->total), 2, ',', '.');
                                @endphp
                                <td style="width:200px">{{ $produto->cliente }}</td>
                                <td style="width:200px">{{ $produto->veiculo }}</td>
                                <td>{{ $produto->referencia }}</td>
                                <td style="width:80px">R$ {{ $valor }}</td>
                                <td>{{ $produto->created_at }}</td>

                            </tr>
                        @endforeach
    </table>
</body>
</html>