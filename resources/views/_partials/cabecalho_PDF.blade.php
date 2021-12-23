
$path = asset('images/logos/primuslogo.jpg');
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$imagem = 'data:image/' . $type . ';base64,' . base64_encode($data);

<div style="text-align:center">
    <img width="300px" src="{{ $imagem }}" alt="">
</div>
