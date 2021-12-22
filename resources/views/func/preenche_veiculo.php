<?php
    use App\Models\Veiculo;
    $placa =  $_POST['somefield'];
    $busca = array(Veiculo::where('placa',$placa)->get());
    echo $busca[0][0];

?>