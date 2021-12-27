<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas</title>

    <style>
        .resumo{
            margin: auto;
        }
        .produtos{
            border: 1px solid black;
            margin:auto;
            padding:10px;
            border-radius: 10px;
        }

        tabela{
           width:800px; 
        }

        tr {
            height: 30px;
        }

        .cab {
            font-style: bold;
        }
        
        .info{
            
            padding: 15px;
            background-color: rgb(245, 245, 245);
        }

        .total{
            border-style: dotted;
            border-right: white;
            border-left: white;
            border-bottom: white;;
        }
    </style>

</head>

<body>
    
     @php 
        $imgL = '/var/www/VeiculosPDV/public/images/logos/primuslogo.jpg';
        $imgW = 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\images\logos\primuslogo.jpg';
    @endphp

    <div>
     <table class="resumo">
         <tr>        
             <td style="width:250px">
<<<<<<< HEAD
                <img width="250px" src={{$imgL}}>
=======
                <img width="250px" src="$img">
>>>>>>> 124c4bd2a4e30c81a577e22ada56054e8fc84a37
             </td>

             <td style="width: 300px;text-align:center">
                <label style="font-size: 16pt;"><b>Prestação de contas</b></label><br>
                <label for="">{{$hoje}} de {{date('Y')}}</label><br>
                <label for="">Responsavel: {{$responsavel}}</label>
             </td>
             
             <td class="info">
                 <b>RESUMO</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTRADAS: {{$entradas}} <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECEBIDO: R$ {{$total}}
             </td>

         </tr>
         
     </table>   
    <br>

    <h3 style="text-align:center">ENTRADAS</h3>
    <table class="produtos">
            <tr class="cab">
                <td style="width: 150px;">Data</td>
                <td style="width: 200px;">Cliente</td>
                <td style="width: 200px;">Veículo</td>
                <td style="width: 100px;">Referência</td>
                <td style="width: 150px;"> Valor pago</td>
            </tr>
            
            
        @php
        $html='';    
            foreach($pagamentos as $p){
            $html.='<tr>
                <td>'.$p['updated_at'].'</td>
                <td>'.$p['cliente'].'</td>
                <td>'.$p['veiculo'].'</td>
                <td>'.$p['referencia'].'</td>
                <td>R$ '.number_format($p['total'],2,',','.').'</td>
            </tr>';
            }
            echo $html;
            @endphp
            
        </table>
    </div>

    <div>
        
    </div>

</body>

</html>