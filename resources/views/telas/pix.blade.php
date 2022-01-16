<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Cadastrar Veículo">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cadastrar</title>

    <link rel="stylesheet" href="{{ asset('css\Cadastrar.css') }}" media="screen">
    @include('_partials.estilos')

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Cadastrar">
    <meta property="og:type" content="website">

    <style>
        table {
            margin: auto;
            font-size: 14pt;
        }

    </style>

</head>

<body class="u-body">

    @include('_partials.cabecalho')

    <section class="u-align-center u-clearfix u-palette-4-dark-2 u-section-1" id="carousel_8556">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <p style="text-align:center"><img width="250" src="{{ asset('images/pix.jpg') }}" alt=""></p>
                    <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">DETALHES DO PAGAMENTO</h4>
                    <div class="u-align-center u-form u-form-1">
                        <p>Digitalize o código PIX QR com seu telefone celular</p>

                        @include('func.funcoes_pix')
                        @php
                            $pathL = '/var/www/VeiculosPDV/public/phpqrcode/qrlib.php';
                            $pathW = 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\phpqrcode\qrlib.php';
                            //
                            try {
                                require $pathW;
                                $pathC = $pathW;
                            } catch (Exception $e) {
                                require $pathL;
                                $pathC = $pathL;
                            }
                            
                            $px[00] = '01';
                            $px[26][00] = 'BR.GOV.BCB.PIX';
                            $px[26][01] = '05828274341';
                            $px[52] = '0000';
                            $px[53] = '986'; //moeda BRL
                            $px[54] = $_SESSION['mensalidade'];//valor da transação
                            $px[58] = 'BR'; //Cod. do País
                            $px[59] = 'ANDRE VERAS'; //beneficiario
                            $px[60] = 'ITAPIPOCA'; //cidade onde é efetuada a transação
                            $px[62][05] = '***'; //identificador da transação
                            
                            $pix = montaPix($px);
                            
                            $pix .= '6304';
                            $pix .= crcChecksum($pix);
                            
                            $qrCodeNome = 'gerar_PIX.png';
                            QRcode::png($pix, $qrCodeNome);
                            echo '<img width=150px src=' . asset($qrCodeNome) . '>';
                        @endphp

                        <br><br>    
                        <table>
                            <tr style="background-color:gray">
                                <td style="width:500px;text-align:left;padding:5px">Total</td>
                                <td colspan='3'>R$ {{number_format($_SESSION['mensalidade'],2,',','.')}} </td>
                            </tr>
                        </table>
                        <p>Favorecido: André Veras<br>Ag.: 1351<br>Cc.: 5316-3<br>Banco: Bradesco</p>


                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('_partials.rodape')


</body>

</html>
