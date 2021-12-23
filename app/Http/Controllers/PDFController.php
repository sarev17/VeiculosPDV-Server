<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pagamento;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    public function diaE(Request $request)
    {
        date_default_timezone_set("America/Sao_Paulo");
        $hojeI = date('Y-m-d') . " 00:00:00";
        $hojeF = date('Y-m-d') . " 23:59:59";
        $mesI = date('Y-m') . '-01 00:00:00';
        $pagamentos = Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->get();
        $html='';

        $html = '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        </head>
        
        <body>
            <div style="text-align: center;margin-top: 100px;margin-bottom: 20px;">
                <h4>Relatório - 23 de dezembro de 2021</h4>
            </div>
            <div >
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Data do pagamento</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">placa</th>
                    <th scope="col">Referência</th>
                    <th scope="col">Valor pago</th>
        
                  </tr>
                </thead>
                <tbody>';
                

                foreach($pagamentos as $p){
                    $html.='<tr>';
                    $html.='<th scope="col">'.$p['updated_at'].'</th>';
                    $html.='<th scope="col">'.$p['cliente'].'</th>';
                    $html.='<th scope="col">'.$p['veiculo'].'</th>';
                    $html.='<th scope="col">'.$p['referencia'].'</th>';
                    $html.='<th scope="col">R$ '.number_format($p['total'],2,',','.').'</th>';
                    $html.='</tr>';
                }
                
               $html.= '</tbody>
              </table>
              <br>
              <table style="background: rgb(126, 149, 165); text-align: right;" class="table table-striped">  
                <tbody>
                  <tr>
                    <th colspan="3" scope="col">Total</th>
                    <th  scope="col">R$ '.number_format(Pagamento::where('updated_at','>',$hojeI)->where('updated_at','<',$hojeF)->sum('total'),2,',','.').'</th>      
                  </tr>
                </tbody>
            </div>
              </table>
            </div>
        </body>
        
        </html>';
        
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($html)->setPaper('A4','landscape');
        return $pdf->stream();
        
    }

}
