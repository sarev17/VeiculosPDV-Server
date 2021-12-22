<?php
    use App\Models\Venda;
    $nome =  $_POST['valores'];
    $busca = array(Venda::where('cliente',$nome)->get());
    echo $busca[0][0];
?>