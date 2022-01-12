<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Veiculo;
use App\Models\Pagamento;
use Illuminate\Support\Facades\App;

class VendaController extends Controller
{
    function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }

    public function store(Request $request)
    {
        date_default_timezone_set("America/Sao_Paulo");
        $venda = new Venda;

        $id_veiculo = array(Veiculo::where('user_id', $_SESSION['id'])->where('placa', $request->placa)->select('id')->get());
        $id = $id_veiculo[0][0]['id'];

        $entrada = floatval(preg_replace('/\D/', '', $request->entrada)) / 100;
        $mensalidade = floatval(preg_replace('/\D/', '', $request->parcela)) / 100;
        $total = floatval(preg_replace('/\D/', '', $request->total)) / 100;

        $nome = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$request->cliente);

        $venda->vencimento = $request->vencimento;
        $venda->user_id = $_SESSION['id'];
        $venda->cliente = strtoupper($nome);
        $venda->cpf = $request->cpf;
        $venda->cep = $request->cep;
        $venda->endereco = $request->rua . ', ' . $request->numero . ', ' . $request->bairro . ', ' . $request->cidade . '-' . $request->estado;
        $venda->parcelas = $request->parcelas;
        $venda->entrada = $entrada;
        $venda->mensalidade = $mensalidade;
        $venda->total = $total;
        $venda->parcelas = $request->parcelas;
        $venda->placa = $request->placa;
        $venda->produto = $request->produto;
        $venda->marca = $request->marca;
        $venda->modelo = $request->modelo;
        $venda->cor = $request->cor;
        $venda->renavam = $request->renavam;
        $venda->fabricacao = $request->fabricacao;
        $venda->obs = $request->obs;
        $venda->updated_at = date('Y-m-d H:i:s');
        $venda->created_at = date('Y-m-d H:i:s');
        ///*
        $venda->save();

        //registrando pagamento da entrada
        $venda_id = Venda::where('placa', $request->placa)->select('id')->get();
        $pagar = new Pagamento;

        if (floatval($venda->entrada) > 0) {
            $pagar->user_id = $_SESSION['id'];
            $pagar->venda_id = $venda_id[0]['id'];
            $pagar->cliente = $request->cliente;
            $pagar->cpf = $request->cpf;
            $pagar->veiculo = $request->placa;
            $pagar->referencia = 'Entrada';
            $pagar->total = $entrada;
            $pagar->save();
        }

        Veiculo::findOrFail($id)->delete();

        

        return redirect()->route('pdf.contrato',['id_venda'=>$venda->id]);

    }

    public function listar()
    { {
            //return $dataTable->render('telas.dados.estoque');
            //$produtos = Veiculo::orderby('id', 'desc')->paginate();
            $produtos = Venda::orderBy('updated_at','desc')->where('user_id', $_SESSION['id'])->get();
            return view('telas.dados.vendas', ['produtos' => $produtos]);
        }
    }


    public function date()
    {
        $dados = explode('d', key($_REQUEST));

        $dados = Venda::where('user_id', $_SESSION['id'])->whereBetween('created', array($dados[1], $dados[0]))->get();

        return view('telas.dados.vendas', ['produtos' => $dados]);
    }
}
