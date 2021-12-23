<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Veiculo;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
  public function diaE(Request $request)
  {

    date_default_timezone_set("America/Sao_Paulo");


    $numero_dia = date('w') * 1;
    $dia_mes = date('d');
    $numero_mes = date('m') * 1;
    $ano = date('Y');
    $dia = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    $mes = ['', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    $hoje = $dia_mes . ' de ' . $mes[$numero_mes];

    $hojeI = date('Y-m-d') . " 00:00:00";
    $hojeF = date('Y-m-d') . " 23:59:59";
    $mesI = date('Y-m') . '-01 00:00:00';

    $pagamentos = Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->get();
    $responsavel = 'André Veras';

    $total = number_format(Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->sum('total'), 2, ',', '.');
    $entradas = Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->count();
    
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]))->setPaper('A4', 'landscape');
    return $pdf->stream($hoje.' de '.date('Y').'.pdf',['Attachment'=>false]);
    //return view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]);
  }

  public function mesE(Request $request)
  {

    date_default_timezone_set("America/Sao_Paulo");


    $numero_dia = date('w') * 1;
    $dia_mes = date('d');
    $numero_mes = date('m') * 1;
    $ano = date('Y');
    $dia = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    $mes = ['', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    $hoje = $dia_mes . ' de ' . $mes[$numero_mes];

    $hojeI = date('Y-m-d') . " 00:00:00";
    $hojeF = date('Y-m-d') . " 23:59:59";
    $mesI = date('Y-m') . '-01 00:00:00';

    $pagamentos = Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->get();
    $responsavel = 'André Veras';

    $total = number_format(Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->sum('total'), 2, ',', '.');
    $entradas = Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->count();
    
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('PDF.entradas_mes', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]))->setPaper('A4', 'landscape');
    return $pdf->stream($mes[$numero_mes].' '.date('Y').'.pdf',['Attachment'=>false]);
    //return view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]);
  }

}
