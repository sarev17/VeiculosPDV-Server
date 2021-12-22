<?php

    $valores = array($_POST);
    $preco = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][0]))/100;
    $entrada = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][1]))/100;
    $parcelas = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][2]));

    $juros = 1.1;

    $result = (($preco-$entrada)*$juros)/$parcelas;

    $info = [$preco,$parcelas,$entrada,$result];
    
    
    echo number_format($result,2,'.','');
?>