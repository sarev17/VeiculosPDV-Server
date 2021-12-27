@php
    require('C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\phpqrcode\qrlib.php')
@endphp

<style>
    table{
        margin: auto;
    }
    .center{
        text-align: center;
    }
    tr{
        height: 20px;
    }
</style>

<div class="center">
    <h3>Marcos Motos</h3>
    <h4>CNPJ: 99.999.999/9999-99 MEI</h4>
    <p>Rua João Tabosa Braga SN, 12, Itapipoca-Ce</p>
</div>
<hr>
<div class="center">
<h4>COMPROVANTE DE PAGAMENTO</h4>
</div>
<hr>

<div>
    <table class="detalhes">
        <tr>
            <td>COD</td>
            <td>CLIENTE</td>
            <td>CPF</td>
            <td>DESCRIÇÃO</td>
        </tr>
        <tr>
            <td style="width: 50px;">03</td>
            <td style="width: 200px;">Andre Veras da Costa</td>
            <td style="width: 150px;">057.373.235-21</td>    
            <td style="width: 250px;">XNR BROS 150 ESD | OCQ2117</td>
        </tr>
    </table>
</div>
<hr>
<div>
<table class="detalhes">
        <tr>
            <td>REF</td>
            <td>RESTANTES</td>
            <td>TOTAL DA VENDA</td>
        </tr>
        <tr>
            <td style="width: 200px;">PARCELA 1</td>
            <td style="width: 200px;">08</td>
            <td style="width: 200px;">R$ 45.000,00</td>
        </tr>
        <tr>
            <td colspan='2' style="width: 400px;"><b> VALOR DO RECIBO </b></td>
            <td colspan='2'><b> R$ 344,50</b></td>
        </tr>
    </table>
    <hr>
    <div class="center">
        @php
            $qrCodeNome = "Comprovante_ID_pagamento.png";
            QRcode::png('http://31.220.31.42/',$qrCodeNome);
            echo '<img width=100px src='.$qrCodeNome.'>';
        @endphp
    </div>
</div>