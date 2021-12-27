<?php

use App\Models\Veiculo;
use App\Models\Venda;

$valores = array($_POST);
//deve receber [model,coluna,dado]
//acessar dados por valores[0]['valores][id]
$model = $valores[0]['valores'][0];
$coluna = $valores[0]['valores'][1];
$dado = $valores[0]['valores'][2];
if(isset($valores[0]['valores'][3])){
    $tipo = ($valores[0]['valores'][3]);
}else{
    $tipo='';
}


if (isset($valores[0]['valores'][3])) {
    
    $busca = Venda::where($coluna,'like', '%'.$dado.'%')->get();
        echo json_encode($busca);
} else {
    if ($model == 'Veiculo') {
        $busca = array(Veiculo::where($coluna, $dado)->get());
        echo $busca[0][0];
    }
    if ($model == 'Venda') {
        $busca = array(Venda::where($coluna, $dado)->where('status', 'aberta')->get());
        echo $busca[0][0];
    }
}