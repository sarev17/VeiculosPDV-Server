@php
require 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\phpqrcode\qrlib.php';
@endphp

<style>
    table {
        margin: auto;
    }

    .center {
        text-align: center;
    }

    tr {
        height: 20px;
    }

    @page {
        margin-top: 1cm;
        size: 58mm 100mm;
        font-size: 6pt;
    }

</style>

<div class="center">
    <h3>Marcos Motos</h3>
    <p>Rua João Tabosa Braga SN, 12, Itapipoca-Ce</p>
</div>
<hr>
<div class="center">
    <h4>COMPR. PAGAMENTO</h4>
</div>
<hr>

<div>
    <table class="detalhes">
        <tr>
            <td>COD</td>
            <td>CLIENTE</td>
            <td>CPF</td>
        </tr>
        <tr>
            <td>{{ strtoupper($r->idv) }}</td>
            <td>{{ strtoupper($r->cliente) }}</td>
            <td>{{ strtoupper($r->cpf) }}</td>
        </tr>
        <tr>
            <td>DESCRIÇÃO</td>
            <td>REF</td>
        </tr>
        <tr>
            <td>{{ strtoupper($r->veiculo) }}</td>
            <td>{{ strtoupper($r->pagas) }}</td>
        </tr>
    </table>
</div>
<hr>
<div>
    <table class="detalhes">
        <tr>
            <td><b> VALOR DO RECIBO </b></td>
            <td ><b>{{ strtoupper($r->total) }}</b></td>
        </tr>
    </table>
</div>
<hr>
<div class="center">
    @php
        $qrCodeNome = 'Comprovante_ID_pagamento.png';
        QRcode::png('http://31.220.31.42/', $qrCodeNome);
        echo '<img width=50px src=' . $qrCodeNome . '>';
    @endphp
</div>
</div>
