<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Venda;

class PagamentoController extends Controller
{
    public function store(Request $r)
    {
        date_default_timezone_set ("America/Sao_Paulo");
        $p = new Pagamento;
        $v = new Venda;

        $atual = explode('/',$r->pagas);
        
        if(intval($r->adiantar)>1){
            $refA = intval($atual[0])+intval($r->adiantar)-1;
        }else{
            $refA =  intval($atual[0]);
        }

        $ref = "Parcela ".$refA;
        


        $parc = intval($atual[0]);

        $total = floatval(preg_replace('/\D/','',$r->total))/100;

        $p->cliente = $r->cliente;
        $p->cpf = $r->cpf;
        $p->cliente = $r->cliente;
        $p->veiculo = $r->veiculo;
        $p->referencia = $ref;
        $p->total =$total;
        $p->venda_id = $r->idv;
        $p->updated_at = date('Y-m-d H:i:s');
        $p->created_at = date('Y-m-d H:i:s');

        
        //atualizando pagamento na tabela vendas
        Venda::where('id',$r->idv)->update(['pagas'=>$refA]);
        
        //testando se restam parcelas
        if(intval($atual[0])==intval($atual[1])){
            Venda::where('id',$r->idv)->update(['status'=>'fechada']);
        }

        $p->save();
        echo '<script>alert("Salvo")</script>';
        return redirect()->route('principal');
      
    }

    public function listar()
    {
        {
            //return $dataTable->render('telas.dados.estoque');
            //$produtos = Veiculo::orderby('id', 'desc')->paginate();
            $produtos = Pagamento::get();
            return view('telas.dados.entradas', ['produtos' => $produtos]);
        }
    }
    public function date()
    {
        $dados = explode('d',key($_REQUEST));
        
        $dados = Pagamento::whereBetween('created_at',array($dados[0].' 00:00:00',$dados[1].' 23:59:59'))->get();
        return view('telas.dados.entradas', ['produtos' => $dados]);
    }
}

