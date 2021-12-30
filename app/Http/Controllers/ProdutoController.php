<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\DataTables\EstoqueDataTable;
use App\Http\Middleware\LogAcessoMiddleware;

class ProdutoController extends Controller
{

    public function store(Request $request)
    {
        date_default_timezone_set ("America/Sao_Paulo");
        $veiculo = new Veiculo;

        if (sizeof(Veiculo::where('user_id',$_SESSION['id'])->where('placa', $request->placa)->get())) {
            return redirect()->route('cadastrar');
        } else {
            $veiculo->user_id = $_SESSION['id'];
            $veiculo->placa = $request->placa;
            $veiculo->produto = $request->produto;
            $veiculo->modelo = $request->modelo;
            $veiculo->marca = $request->marca;
            $veiculo->exercicio = $request->exercicio;
            $veiculo->cor = $request->cor;
            $veiculo->renavam = $request->renavam;
            $veiculo->fabricacao = $request->fabricacao;
            $veiculo->compra = floatval(preg_replace("/[^0-9]/", "", $request->compra)) / 100;
            $veiculo->venda = floatval(preg_replace("/[^0-9]/", "", $request->venda)) / 100;
            $veiculo->obs = $request->obs;
            $veiculo->updated_at = date('Y-m-d H:i:s');
            $veiculo->created_at = date('Y-m-d H:i:s');

            echo "<script>alert('Salvo com sucesso')</script>";
            $veiculo->save();
            return redirect()->route('cadastrar');
        }
    }

    public function listar()
    {
        $produtos = Veiculo::where('user_id',$_SESSION['id'])->get();
        return view('telas.dados.estoque', ['produtos' => $produtos]);
    }

    public function delete(Veiculo $id)
    {
        $id->delete();
        return redirect()->route('veiculos');
    }

    public function edit_placa()
    {
        return $_REQUEST;
    }
    
    public function edit(Request $request, Veiculo $veiculo)
    {

        date_default_timezone_set ("America/Sao_Paulo");
        Veiculo::where('placa', '=', $request->placa)->update([

            'placa' => $request->placa,
            'produto' => $request->produto,
            'modelo' => $request->modelo,
            'marca' => $request->marca,
            'exercicio' => $request->exercicio,
            'cor' => $request->cor,
            'renavam' => $request->renavam,
            'fabricacao' => $request->fabricacao,
            'compra' => floatval(preg_replace("/[^0-9]/", "", $request->compra)) / 100,
            'venda' => floatval(preg_replace("/[^0-9]/", "", $request->venda)) / 100,
            'obs' => $request->obs,
            'updated_at'=> date('Y-m-d H:i:s')
        ]);

        return redirect()->route('veiculos');
    }
}
