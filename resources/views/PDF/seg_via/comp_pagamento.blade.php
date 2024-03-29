@php

use App\Models\Info;

$pathL = '/var/www/VeiculosPDV/public/phpqrcode/qrlib.php';
$pathW = 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\phpqrcode\qrlib.php';

try{
    require $pathW;
    $pathC = $pathW;
}catch(Exception $e){
    require $pathL;
    $pathC = $pathL;
}

$u = Info::where('user_id',$_SESSION['id'])->get()->first();

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

    hr {
        border-width: 0;
        height: 1px;
        border-top-width: 1px;
        border-top: 1px dotted #000;
    }

    @page {
        margin-top: 1cm;
        size: 80mm 160mm;
        font-size: 9pt;
    }

    p{
        text-transform:uppercase;
    }

</style>

<div class="center">
    <hr>
    <h3>COMPROVANTE DE PAGAMENTO</h3>
</div>
<hr>
<div class="center">
    <p>Valor do pagamento</p>
    <h1>R$ {{number_format($p->total,2,',','.')}}</h1>
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
            <td>{{ strtoupper($p->id) }}</td>
            <td>{{ strtoupper($p->cliente) }}</td>
            <td>{{ strtoupper($p->cpf) }}</td>
        </tr>
    </table>
</div>
<hr>
<div>
<p>Fav: <b>{{$u->nome}} - {{$u->cpf}}</b><br>End. {{$u->rua}}, {{$u->numero}}, {{$u->bairro}}, {{$u->cidade}}-{{$u->estado}}</p>
<hr>
<p>DESC: {{$p->veiculo}} <br><b>REF: {{$p->referencia}}</b></p>
<p style="text-align:right">PAGO EM: {{date('d/m/Y')}}</p>
<div class="center">
    @php
        $qrCodeNome = 'Comprovante_ID_pagamento.png';
        QRcode::png('http://31.220.31.42/qr_pagamento/'.$p->id, $qrCodeNome);
        echo '<img width=80px src=' . $qrCodeNome . '>';
    @endphp
</div>
