<link rel="stylesheet" href="{{ asset('css\form.css') }}" media="screen">

@php
    use App\Models\Veiculo;
    $placa = Veiculo::where('id',key($_REQUEST))->select('placa')->get();
    if(isset($placa[0]['placa']))
        $p = $placa[0]['placa'];
    else
        $p='';
@endphp

<hr>
<h5>DADOS DO VEICULO</h5>
<div>
    <div class="label-float row">
        <input value="{{$p ?? ''}}" style="background-color: rgb(241, 171, 85);" maxlength="7" required minlength=7 type="text" name="placa"
            id="placa" class="entrada entrada-p" placeholder="PLACA" autofocus="autofocus">
        <label>PLACA</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="produto" id="produto" class="entrada entrada-m" placeholder="PRODUTO">
        <label>PRODUTO</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="marca" id="marca" class="entrada entrada-m" placeholder="MARCA">
        <label>MARCA</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input required type="text" name="modelo" id="modelo" class="entrada entrada-sg" placeholder="MODELO">
        <label>MODELO</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input maxlength="4" required onkeyup="numeros('exercicio',this.value)" type="text" name="exercicio"
            id="exercicio" class="entrada entrada-p" placeholder="EXERCICIO">
        <label>EXERCICIO</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="cor" id="cor" class="entrada entrada-g" placeholder="COR">
        <label>COR</label>
    </div>
    <div class="label-float row">
        <input required onkeyup="numeros('renavam',this.value)" type="text" name="renavam" id="renavam"
            class="entrada entrada-g" placeholder="RENAVAM">
        <label>RENAVAM</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input maxlength="4" required onkeyup="numeros('fabricacao',this.value)" type="text" name="fabricacao"
            id="fabricacao" class="entrada entrada-p" placeholder="ANO">
        <label>ANO</label>
    </div>
    <div class="label-float row">
        <input required onblur="moeda('venda',this.value)" type="text" name="venda" id="venda" class="entrada entrada-g"
            placeholder="VALOR A VISTA">
        <label>VALOR</label>
    </div>
</div>
<br>
<Label>OBERVAÇÕES</Label><br>
<div class="label-float row">
    <textarea name="obs" id="obs" cols="1" rows="2" class="txarea"></textarea>
</div>
<hr>
<h5>DADOS DA COMPRA</h5>
<div>
    <div class="label-float row">
        <input onchange="mensal()" onkeyup="mensal()" maxlength="4" required  type="number" name="parcelas" id="parcelas"
            class="entrada entrada-p" placeholder="PARCELAS">
        <label>PARCELAS</label>
    </div>
    <div class="label-float row">
        <input required onkeyup="mensal();moeda('entrada',this.value)" type="text" name="entrada" id="entrada"
            class="entrada entrada-g" placeholder="ENTRADA">
        <label>ENTRADA</label>
    </div>
    <div class="label-float row">
        <input required onblur="moeda('parcela',this.value)" type="text" name="parcela" id="parcela"
            class="entrada entrada-g" placeholder="MENSALIDADE">
        <label>MENSALIDDE</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input onblur="moeda('total',this.value)" required type="text" name="total" id="total"
            class="entrada entrada-sg" placeholder="MENSALIDADE">
        <label>VALOR TOTAL</label>
    </div>
</div>

<hr>
<h5>DADOS DO CLIENTE</h5>

<div>
    <div class="label-float row">
        <input required type="text" name="cliente" id="cliente" class="entrada entrada-sg" placeholder="CLIENTE">
        <label>CLIENTE</label>
    </div>
    <div class="label-float row">
        <input maxlength="14" onkeyup="cpfF(this.value)" required type="text" name="cpf" id="cpf"
            class="entrada entrada-g" placeholder="CPF">
        <label>CPF</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input maxlength="9" onkeyup="pesquisacep(this.value)" required type="text" name="cep" id="cep"
            class="entrada entrada-m" placeholder="cep">
        <label>CEP</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="rua" id="rua" class="entrada entrada-g" placeholder="rua">
        <label>RUA</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="bairro" id="bairro" class="entrada entrada-m" placeholder="bairro">
        <label>BAIRRO</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="numero" id="numero" class="entrada entrada-p" placeholder="numero">
        <label>NUMERO</label>
    </div>
</div>
<div>
    <div class="label-float row">
        <input required type="text" name="cidade" id="cidade" class="entrada entrada-mg" placeholder="cidade">
        <label>CIDADE</label>
    </div>
    <div class="label-float row">
        <input required type="text" name="estado" id="estado" class="entrada entrada-m" placeholder="estado">
        <label>ESTADO</label>
    </div>
</div>

<!-- Button trigger modal-->


<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Confirmar Venda</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-shopping-cart fa-4x animated rotateIn mb-4" aria-hidden="true"></i>

        <p>Deseja confirmar a venda?</p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->
<hr>


<script>
    
    placa();

$('#placa').keyup(function() {
        valores = ['Veiculo', 'placa', $('#placa').val(), 'parcial'];
        $.ajax({
            type: "POST",
            url: 'ajax',
            dataType: 'html',
            data: {
                valores,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                
                dados = JSON.parse(data);
                placas = []
                

                dados[0].forEach(function(ele){
                  placas.push(ele['placa']+'|'+ele['modelo']+'|'+ele['fabricacao']);
                  

                });

                  console.log(placas)

                $("#placa").autocomplete({
                    minlength:1,
                    autofocus: true,
                    source: placas,
                    
                    
                });

            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);
            },
        })

    });

    function placa() {
        valores = ['Veiculo', 'placa', $('#placa').val()];
        if ($('#placa').val().length == 7) {
            $.ajax({
                type: "POST",
                url: 'ajax',
                dataType: 'html',
                data: {
                    valores,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    dados = JSON.parse(data);
                    $('#produto').val(dados['produto']);
                    $('#marca').val(dados['marca']);
                    $('#modelo').val(dados['modelo']);
                    $('#exercicio').val(dados['exercicio']);
                    $('#cor').val(dados['cor']);
                    $('#renavam').val(dados['renavam']);
                    $('#fabricacao').val(dados['fabricacao']);
                    $('#venda').val(dados['venda']);
                    $('#venda').focus();
                    $('#fabricacao').focus();
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);
                    
                },
            })
        }
    }


    $('#placa').keyup(function() {

        valores = ['Veiculo', 'placa', $('#placa').val()];
        if ($('#placa').val().length == 7) {
            $.ajax({
                type: "POST",
                url: 'ajax',
                dataType: 'html',
                data: {
                    valores,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    dados = JSON.parse(data);
                    $('#produto').val(dados['produto']);
                    $('#marca').val(dados['marca']);
                    $('#modelo').val(dados['modelo']);
                    $('#exercicio').val(dados['exercicio']);
                    $('#cor').val(dados['cor']);
                    $('#renavam').val(dados['renavam']);
                    $('#fabricacao').val(dados['fabricacao']);
                    $('#venda').val(dados['venda']);
                    $('#venda').focus();
                    $('#fabricacao').focus();
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);
                },
            })
        }
    });

    function mensal(){

        total  = parseFloat(retira_moeda('venda'));
        entrada = parseFloat(retira_moeda('entrada'));
        parcela = parseInt($('#parcelas').val())
        juros = 1.1;
        $regra = ((total-entrada)*1.1)/parcela;
        $('#parcela').val($regra);
        moeda('parcela',parseFloat($('#parcela').val()).toFixed(2));
        
        venda = (((total-entrada)*1.1)+entrada).toFixed(2);
        $('#total').val(venda);
        moeda('total',parseFloat($('#total').val()).toFixed(2));
    }

</script>
