<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Veiculo;
use App\Models\Venda;
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

    //$pagamentos = Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->where('user_id',$_SESSION['id'])->get();
    $pagamentos = Pagamento::whereYear('updated_at',date('Y'))->whereMonth('updated_at',date('m'))->whereDay('updated_at',date('d'))->where('user_id',$_SESSION['id'])->get();
    $responsavel = 'André Veras';

    //$total = number_format(Pagamento::where('user_id',$_SESSION['id'])->where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->sum('total'), 2, ',', '.');
    $total = number_format((Pagamento::whereYear('updated_at',date('Y'))->whereMonth('updated_at',date('m'))->whereDay('updated_at',date('d'))->sum('total')),2,',','.');
    $entradas = Pagamento::where('updated_at', '>', $hojeI)->where('updated_at', '<', $hojeF)->count();
    
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]))->setPaper('A4', 'portrait');
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
    $imgW = 'C:\Users\Andre Veras\Documents\laravel\PDV\VeiculosPDV\VeiculosPDV-Server\public\images\logos\primuslogo.jpg';
    $imgL = '/var/www/VeiculosPDV/public/images/logos/primuslogo.jpg';
    $hojeI = date('Y-m-d') . " 00:00:00";
    $hojeF = date('Y-m-d') . " 23:59:59";
    $mesI = date('Y-m') . '-01 00:00:00';

    $pagamentos = Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->get();
    $responsavel = 'André Veras';

    $total = number_format(Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->sum('total'), 2, ',', '.');
    $entradas = Pagamento::where('updated_at', '>', $mesI)->where('updated_at', '<', $hojeF)->count();
    
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('PDF.entradas_mes', ['img'=>$imgL,'pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]))->setPaper('A4', 'landscape');
    return $pdf->stream($mes[$numero_mes].' '.date('Y').'.pdf',['Attachment'=>false]);
    //return view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]);
  }

  public function contrato($r)
  {
    $venda = Venda::find($r);

    
    $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('PDF.contrato', ['r'=>$venda]))->setPaper('A4', 'portrait');
       return $pdf->stream('Contrato ' . $venda->cliente .'-'. $venda->placa.'.pdf', ['Attachment' => false]);
  }

  public function segunda_via_entrada($id){
    $pagamento = Pagamento::find($id);
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('PDF.seg_via.comp_pagamento', ['p' => $pagamento,]))->setPaper('A4', 'portrait');
    return $pdf->stream('Segunda via '.$pagamento->veiculo.' '.$pagamento->referencia.'.pdf',['Attachment'=>false]);

  }
 

}
