<link rel="stylesheet" href="{{ asset('css\form.css') }}" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@php
    use App\Models\Veiculo;
    
    $v =  array(Veiculo::where('id',key($_REQUEST))->get());
    
@endphp


<h5>DADOS DO VEICULO</h5>
<div>
    <div class='label-float label-float row'>
        <input maxlength="7" required  onkeyup="placaT(this.value)" minlength=7 type="text" name="placa" id="placa"
            class="entrada entrada-p" placeholder="PLACA" autofocus="autofocus" value="{{$v[0][0]['placa']}}">
        <label for="placa">PLACA</label>    
    </div>
    <div class='label-float label-float row'>
        <select required   name="produto" id="produto" class="entrada entrada-m"
            placeholder="PRODUTO">
            <option value="{{strtolower($v[0][0]['produto'])}}" selected>{{strtolower($v[0][0]['produto'])}}</option>
            <option value="carro">CARRO</option>
            <option value="moto">MOTO</option>
        </select>
        
    </div>
    <div class='label-float row'>
        <select required name="marca" id="marca" class="entrada entrada-m">
            <option value="{{strtolower($v[0][0]['marca'])}}" selected>{{strtolower($v[0][0]['marca'])}}</option>
        </select>
    </div>
    <div class='label-float row'>
        <select required name="modelo" id="modelo" class="entrada entrada-m">
            <option value="{{strtolower($v[0][0]['modelo'])}}">{{strtolower($v[0][0]['modelo'])}}</option>
        </select>
    </div>
</div>
<div>
    <div class='label-float row'>
        <input maxlength="4" required onkeyup="numeros('exercicio',this.value)" type="text" name="exercicio"
            id="exercicio" class="entrada entrada-p" placeholder="EXERCICIO" value="{{strtolower($v[0][0]['exercicio'])}}">
            <label for="placa">EXERCICIO</label>    
    </div>

    <div class='label-float row'>
        <input required type="text" name="cor" id="cor" class="entrada entrada-g" placeholder="COR" value="{{strtolower($v[0][0]['cor'])}}">
        <label for="placa">COR</label>    
    </div>

    <div class='label-float row'>
        <input required onkeyup="numeros('renavam',this.value)" type="text" name="renavam" id="renavam"
            class="entrada entrada-g" placeholder="RENAVAM" value="{{strtolower($v[0][0]['renavam'])}}">
            <label for="placa">RENAVAM</label>    
    </div>
</div>
<div>
<div class='label-float row'>
    <input maxlength="4" required onkeyup="numeros('fabricacao',this.value)" type="text" name="fabricacao"
        id="fabricacao" class="entrada entrada-p" placeholder="ANO" value="{{strtolower($v[0][0]['fabricacao'])}}">
        <label for="placa">ANO FAB.</label>    
</div>
<div class='label-float row'>
    <input required type="text" name="compra" id="compra" class="entrada entrada-g"
        placeholder="VALOR DE COMPRA" value="{{strtolower($v[0][0]['compra'])}}">
        <label for="placa">VALOR DE COMPRA</label>    
</div>
<div class='label-float row'>
    <input required type="text" name="venda" id="venda" class="entrada entrada-g"
        placeholder="VALOR DE VENDA" value="{{strtolower($v[0][0]['venda'])}}">
        <label for="placa">VALOR DE VENDA</label>    
</div>
</div>
<br>
<label for="obs">Observações</label><br>
<div class='label-float row'>
    <textarea value="{{strtolower($v[0][0]['obs'])}}" name="obs" id="obs" cols="1" label-float rows="2" class="txarea"></textarea>
</div>

<input type="hidden" id="id" name="id" value="{{key($_GET)}}">


<br>

<script>
$('#compra').focus();
$('#venda').focus();
//$('#obs').focus();

</script>
