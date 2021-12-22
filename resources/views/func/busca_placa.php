<?php
    use App\Models\Veiculo;
    $result = array(Veiculo::where('placa',$_POST['somefield'])->get());
    echo $result[0][0];
?>