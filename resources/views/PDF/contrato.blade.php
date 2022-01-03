@php
use App\Models\Info;
$d = Info::where('user_id', $_SESSION['id'])
    ->get()
    ->first();
$numero_dia = date('w') * 1;
$dia_mes = date('d');
$numero_mes = date('m') * 1;
$ano = date('Y');
$dia = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
$mes = ['', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$hoje = $dia_mes . ' de ' . $mes[$numero_mes];
$hojeI = date('Y-m-d') . ' 00:00:00';
$hojeF = date('Y-m-d') . ' 23:59:59';
$mesI = date('Y-m') . '-01 00:00:00';

$pathL = '/var/www/VeiculosPDV/public/classes/clsTexto.php';
$pathW = 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\classes\clsTexto.php';
try {
    require $pathW;
    $pathC = $pathW;
} catch (Exception $e) {
    require $pathL;
    $pathC = $pathL;
}
require_once($pathC);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
</head>

<style>
    @page {
        margin: 2.5cm, 2.5cm, 2.5cm, 2.5cm;
    }

    .center {
        text-align: center;
    }

    .upper {
        text-transform: uppercase;
    }

    body {
        text-align: justify;
    }

    .indent {
        text-indent: 0.5cm;
    }

</style>

<body>

    <h2 class="center">COMPRA E VENDA DE VEÍCULO</h2>

    <p class="upper">VENDEDOR: {{ $d->nome }} CPF/CNPJ: {{ $d->cpf }}, localizado na rua
        {{ $d->rua }}, {{ $d->numero }},
        {{ $d->bairro }}, {{ $d->cidade }}-{{ $d->estado }}.</p>
    <p class="upper">COMPRADOR: {{ $r->cliente }} CPF/CNPJ: {{ $r->cpf }}), localizado na
        {{ $r->endereco }}.</p>
    <p class="indent">Pelo presente instrumento, as partes supra citadas têm entre si justo e contratado a venda
        de um veículo
        <span class="upper"><b>{{ $r->marca }} {{ $r->modelo }}, {{ $r->cor }}, ano
                {{ $r->fabricacao }}, placa {{ $r->placa }}</b></span>, nos seguintes termos:
    </p>
    <p class="indent">1. O veículo é de propriedade do VENDEDOR, que comprova ao COMPRADOR mediante entrega do
        certificado número
        <b>{{ $r->renavam }}</b> expedido pela DETRAN, totalmente livre e desembaraçado de quaisquer ônus.
    </p>
    <p class="indent">2. O preço total do veículo é de R$ {{ number_format($r->total, 2, ',', '.') }} ({{strtoupper(clsTexto::valorPorExtenso($r->total))}})  </p>
    <p class="indent">3. O comprador pagará o veículo nas seguintes condições:</p>
    <p class="indent">3.1 - R$ {{ number_format($r->entrada, 2, ',', '.') }} ({{strtoupper(clsTexto::valorPorExtenso($r->entrada))}}) de entrada mais
        {{ $r->parcelas }} parcelas de
        {{ number_format($r->mensalidade, 2, ',', '.') }} ({{strtoupper(clsTexto::valorPorExtenso($r->mensalidade))}}) , mediante pagamento á vista, representado por (dinheiro ou
        cheque - no
        caso de ser cheque, especificar o número e o banco do mesmo).</p>
    <p class="indent">3.2 - A quitação do presente negócio, quando efetivada por cheque, ocorrerá somente após a
        compensação do (s)
        mesmo (s).</p>
    <p class="indent">4. As multas, impostos e taxas não quitados e incidentes sobre o veículo objeto do
        presente contrato, até a
        presente data, são de inteira e exclusiva responsabilidade do VENDEDOR, que assume o compromisso de pagar os
        respectivos montantes e apresentar seus comprovantes ao COMPRADOR no prazo de 5 (cinco) dias, contados a partir
        da data da assinatura do presente contrato, sob pena de, não o fazendo, declarar-se em moratória perante o
        COMPRADOR, sujeitando-se ás ações cabíveis de cobrança e execução.</p>
    <p class="indent">5. O VENDEDOR apresenta, para concretização do negócio, negativa de multa, expedida pelo
        DETRAN, assumindo a
        responsabilidade cível e criminal pela autenticidade do respectivo documento. O COMPRADOR declara ter recebido
        respectivo documento original, lido e de acordo, sem contudo declinar do direito de cobrança dos eventuais
        encargos mencionados na cláusula anterior.</p>
    <p class="indent">6. O COMPRADOR compromete-se, no prazo de 30 (trinta) dias contados da assinatura do
        presente contrato, a
        providenciar, junto ao DETRAN, o registro da respectiva transferência de propriedade, sob pena, de não o
        fazendo, vir a responder pelos encargos, multas e demais cominações decorrentes de sua omissão.</p>
    <p class="indent">7. A entrega do veículo é feita (opção: de imediato ou após a quitação do negócio). (Se
        feita de imediato a
        cláusula continua como segue:) O COMPRADOR declara ter recebido o mesmo mediante vistoria, nada mais tendo a
        reclamar quanto a estado, conservação ou acessórios, assumindo inteira responsabilidade cível ou criminal pela
        condução do mesmo, isentando o VENDEDOR de qualquer ônus ou reparação, co-responsabilidade ou participação em
        qualquer ato em desacordo com o Código Nacional de Trânsito, a partir da efetivação desta entrega. (Se feita
        após a quitação do negócio, a cláusula continua como segue:) No intervalo entre a data deste contrato e até a
        entrega do veículo, o VENDEDOR assume a responsabilidade cível ou criminal pela condução do mesmo, isentando o
        COMPRADOR de qualquer ônus ou reparação, co-responsabilidade ou participação em qualquer ato em desacordo com o
        Código Nacional de Trânsito, sendo esta responsabilidade transferida ao COMPRADOR somente a partir do ato de
        entrega do veículo, que será firmado no verso deste contrato ou em recibo á parte.</p>
    <p class="indent">8. Os contratantes assinam por si, seus herdeiros ou sucessores, em caráter irrevogável, o
        presente contrato, na
        presença das testemunhas abaixo indicadas, escolhendo o foro e a comarca desta cidade para dirimir quaisquer
        dúvidas, porventura suscitadas pelo presente documento.</p>
    <br>
    <p>{{ $d->cidade }}, {{ $d->estado }}. {{ $hoje }} de {{date('Y')}}</p>
    <br><br>
    <p class="center">________________________________________________</p>
    <p class="center upper">{{ $d->nome }} ({{ $d->cpf }})</p>
    <br><br>
    <p class="center">________________________________________________</p>
    <p class="center upper">{{ $r->cliente }} ({{ $r->cpf }})</p>


</body>

</html>
