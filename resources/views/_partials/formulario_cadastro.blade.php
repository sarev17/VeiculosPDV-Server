<link rel="stylesheet" href="{{ asset('css\form.css') }}" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



<h5>DADOS DO VEICULO</h5>
<div>
    <div class='label-float label-float row'>
        <input maxlength="7" required onkeyup="placaT(this.value)" minlength=7 type="text" name="placa" id="placa"
            class="entrada entrada-p" placeholder="PLACA" autofocus="autofocus">
        <label for="placa">PLACA</label>    
    </div>
    <div class='label-float label-float row'>
        <select required onchange="marcasVeiculos(this.value)" name="produto" id="produto" class="entrada entrada-m"
            placeholder="PRODUTO">
            <option value="0" disabled selected>PRODUTO</option>
            <option value="carro">CARRO</option>
            <option value="moto">MOTO</option>
        </select>
        
    </div>
    <div class='label-float row'>
        <select required onchange="modeloVeiculos(this.value)" name="marca" id="marca" class="entrada entrada-m">
            <option value="0" disabled selected>MARCA</option>
        </select>
    </div>
    <div class='label-float row'>
        <select required name="modelo" id="modelo" class="entrada entrada-m">
            <option value="1">MODELO</option>
        </select>
    </div>
</div>
<div>
    <div class='label-float row'>
        <input maxlength="4" required onkeyup="numeros('exercicio',this.value)" type="text" name="exercicio"
            id="exercicio" class="entrada entrada-p" placeholder="EXERCICIO">
            <label for="placa">EXERCICIO</label>    
    </div>

    <div class='label-float row'>
        <input required type="text" name="cor" id="cor" class="entrada entrada-g" placeholder="COR">
        <label for="placa">COR</label>    
    </div>

    <div class='label-float row'>
        <input required onkeyup="numeros('renavam',this.value)" type="text" name="renavam" id="renavam"
            class="entrada entrada-g" placeholder="RENAVAM">
            <label for="placa">RENAVAM</label>    
    </div>
</div>
<div>
<div class='label-float row'>
    <input maxlength="4" required onkeyup="numeros('fabricacao',this.value)" type="text" name="fabricacao"
        id="fabricacao" class="entrada entrada-p" placeholder="ANO">
        <label for="placa">ANO FAB.</label>    
</div>
<div class='label-float row'>
    <input required onkeyup="moeda('compra',this.value)" type="text" name="compra" id="compra" class="entrada entrada-g"
        placeholder="VALOR DE COMPRA">
        <label for="placa">VALOR DE COMPRA</label>    
</div>
<div class='label-float row'>
    <input required onkeyup="moeda('venda',this.value)" type="text" name="venda" id="venda" class="entrada entrada-g"
        placeholder="VALOR DE VENDA">
        <label for="placa">VALOR DE VENDA</label>    
</div>
</div>
<br>
<label for="obs">Observações</label><br>
<div class='label-float row'>
    <textarea name="obs" id="obs" cols="1" label-float rows="2" class="txarea"></textarea>
</div>
<br>
