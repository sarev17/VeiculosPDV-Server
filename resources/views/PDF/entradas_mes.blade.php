<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestação de contas</title>
</head>
<style>
    .center {
        text-align: center;
    }

    td {
        padding-right: 10px;
        padding-bottom: 5px;
        text-transform: uppercase;
    }

    .entradas {
        margin: auto;
        padding: 10px;
        border-bottom: 1px solid black;
        border-top: 1px solid black;

    }

</style>

<body>
    <div class="center">
        <h2>RELATÓRIO</h2>
        <h4 style="text-transform:uppercase">01 até {{ $hoje }} DE {{ date('Y') }}</h4>
    </div>

    <table class="entradas">
        <tr>
            <td style="border-bottom: 1px solid black;" colspan='5'>ENTRADAS</td>
        </tr>
        <tr class="cabecalho">
            <td>DATA</td>
            <td>CLIENTE</td>
            <td>VEICULO</td>
            <td>REFERENCIA</td>
            <td>VALOR</td>
        </tr>

        @php
            
            foreach ($pagamentos as $p) {
                echo "<tr>
                            <td>$p->updated_at</td>
                            <td style='width:200px'>$p->cliente</td>
                            <td>$p->veiculo</td>
                            <td>$p->referencia</td>
                            <td style='width:100px'>R$ $p->total</td>
                        </tr>";
            }
            
        @endphp

        <tr>
            <td style="border-top: 1px solid black" colspan='4'>TOTAL</td>
            <td style="border-top: 1px solid black;">R$ {{$total}}</td>
        </tr>

    </table>

</body>

</html>
