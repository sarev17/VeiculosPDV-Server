<?php

    $valores = array($_POST);
    $preco = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][0]))/100;
    $entrada = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][1]))/100;
    $parcelas = floatval(preg_replace('/[^0-9]/','',$valores[0]['valores'][2]));

    $juros = doubleval($_SESSION['taxa_juros'])+1;
    $forma = $_SESSION['forma_juros'];
    
    if($forma=='VLT'){
        $result = ($preco*($juros))/$parcelas;
    }
    if($forma=='VSE'){
        $result = (($preco-$entrada)*$juros)/$parcelas;
    }
    if($forma=='AAT'){
        $ano = $parcelas/12;
        $result ($preco*($juros-1)*$ano);
    }
    if($forma=='AAE'){
        $ano = $parcelas/12;
        $result = (($preco-$entrada)*($juros-1)*$ano);
    }
    if($forma=='AMT'){
        $result = (($preco)*($juros-1)*$entrada);
    }
    if($forma=='AMT'){
        $result = (($preco-$entrada)*($juros-1)*$entrada);
    }

    

    $info = [$preco,$parcelas,$entrada,$result];
    
    
    echo number_format($result,2,'.','');
?>