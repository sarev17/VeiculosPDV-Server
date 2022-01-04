<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\User;
use App\Models\Venda;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\App;

class PagamentoController extends Controller
{
    public function store(Request $r)
    {
        date_default_timezone_set("America/Sao_Paulo");
        $p = new Pagamento;
        $v = new Venda;
        
        //testando se pagamento ja foi registrado


        $atual = explode('/', $r->pagas);

        if (intval($r->adiantar) > 1) {
            $refA = intval($atual[0]) + intval($r->adiantar) - 1;
        } else {
            $refA =  intval($atual[0]);
        }

        $ref = "Parcela " . $refA;



        $parc = intval($atual[0]);

        $total = floatval(preg_replace('/\D/', '', $r->total)) / 100;
        $teste = Pagamento::where('veiculo',$r->veiculo)->where('referencia',$ref)->count();

        $vencimento = date('Y-m-d', strtotime($r->vencimento.' + 30 days'));
        if($teste>0){
            return redirect()->route('principal');
        }

        $p->user_id = $_SESSION['id'];
        $p->cliente = $r->cliente;
        $p->cpf = $r->cpf;
        $p->cliente = $r->cliente;
        $p->veiculo = $r->veiculo;
        $p->referencia = $ref;
        $p->total = $total;
        $p->venda_id = $r->idv;
        $p->updated_at = date('Y-m-d H:i:s');
        $p->created_at = date('Y-m-d H:i:s');


        //atualizando pagamento na tabela vendas
        Venda::where('id', $r->idv)->update(['pagas' => $refA,'vencimento'=>$vencimento]);

        //testando se restam parcelas
        if (intval($atual[0]) == intval($atual[1])) {
            Venda::where('id', $r->idv)->update(['status' => 'fechada']);
        }

        $p->save();

        $u = Info::where('user_id',$_SESSION['id'])->get()->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('PDF.comp_pagamento', ['r' => $r,'u'=>$u]))->setPaper('A4', 'portrait');
        return $pdf->stream('Comprovante ' . date('Y') . '.pdf', ['Attachment' => false]);
        //return view('PDF.entradas', ['pagamentos' => $pagamentos, 'total' => $total, 'entradas' => $entradas,'hoje'=>$hoje,'responsavel'=>$responsavel]);

    }

    public function listar()
    { {
            //return $dataTable->render('telas.dados.estoque');
            //$produtos = Veiculo::orderby('id', 'desc')->paginate();
            $produtos = Pagamento::orderBy('updated_at','desc')->where('user_id',$_SESSION['id'])->get();
            return view('telas.dados.entradas', ['produtos' => $produtos]);
        }
    }
    public function date()
    {
        $dados = explode('d', key($_REQUEST));
        $dados = Pagamento::where('user_id',$_SESSION['id'])->whereBetween('created_at', array($dados[0] . ' 00:00:00', $dados[1] . ' 23:59:59'))->get();
        return view('telas.dados.entradas', ['produtos' => $dados]);
    }

    public function busca_qr(Venda $id)
    {
        $pagamentos = Pagamento::where('venda_id', '=', $id->id)->get();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('comprovantes.pagamento', ['produtos' => $pagamentos]))->setPaper('A4', 'portrait');
        return $pdf->stream('Pagamentos ' . ' ' . date('Y') . '.pdf', ['Attachment' => false]);
        
    }
}
