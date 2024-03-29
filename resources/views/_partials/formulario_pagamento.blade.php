<link rel="stylesheet" href="{{ asset('css\form.css') }}" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

 

<div>
    <div class='label-float row'>
        <input required type="text" name="cliente" id="cliente" class="entrada entrada-sg" placeholder="cliente">
        <label for="placa">CLIENTE</label>
    </div>
    <div class="label-float row">
        <input maxlength="14" required type="text" name="cpf" id="cpf"
            class="entrada entrada-m" placeholder="CPF">
        <label>CPF</label>
    </div>
    <div class='label-float row'>
        <input required type="text" name="veiculo" id="veiculo" class="entrada entrada-sg" placeholder="veiculo">
        <label for="placa">VEICULO</label>
    </div>
    <div class='label-float row'>
        <input required type="text" name="pagas" id="pagas" class="entrada entrada-m" placeholder="pagas">
        <label for="placa">Parcela</label>
    </div>
</div>
<div>

    <div class='label-float row'>
        <input onkeyup="totalP()" onchange="totalP()" value='1' required type="number" name="adiantar" id="adiantar"
            class="entrada entrada-p" placeholder="adiantar">
        <label for="placa">QTD PARCELAS</label>
    </div>
    <div class='label-float row'>
        <input required onblur="moeda('mensalidade',this.value)" type="text" name="mensalidade" id="mensalidade"
            class="entrada entrada-m" placeholder="mensalidade">
        <label for="placa">MENSALIDADE</label>
    </div>
    <div class='label-float row'>
        <input required onkeyup="moeda('total',this.value)" onblur="moeda('total',this.value)" type="text" name="total"
            id="total" class="entrada entrada-G" placeholder="total">
        <label for="placa">TOTAL</label>
    </div>
    <div class='label-float row'>
        <input required type="hidden" name="idv" id="idv" class="entrada entrada-G">
    </div>
    <div class="label-float row">
        <input required type="date" value="" name="vencimento" id="vencimento"
            class="entrada entrada-g" placeholder="MENSALIDADE">
        <label>VENCIMENTO</label>
    </div>

</div>


<br>
<script>
    //BUSCA PELO NOME
    

    //BUSCA PELO CPF
    $('#cpf').keyup(function() {
        valores = ['Venda', 'cpf', $('#cpf').val()];
        console.log("buscando: " + valores);
        if ($('#cpf').val().length == 14) {
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
                    $('#cliente').val(dados['cliente']);
                    $('#veiculo').val(dados['marca'] + " " + dados['modelo'] + " - " + dados[
                        'placa']);
                    $('#pagas').val((parseInt(dados['pagas']) + 1) + "/" + dados['parcelas']);
                    $('#mensalidade').val(dados['mensalidade']);
                    $('#mensalidade').focus();
                    $('#total').val(totalP());
                    moeda('total', parseFloat($('#total').val()).toFixed(2));
                    $('#total').focus();
                    $('#idv').val(dados['id']);

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            })
        }
    });

    function totalP() {
        total = (parseInt($('#adiantar').val()) * (retira_moeda('mensalidade'))).toFixed(2);
        console.log('total= ' + total);
        qtd = $('#adiantar').val()
        $('#total').val(total);
        $('#total').focus();
        $('#adiantar').focus();
        return total;
    }



    $('#cliente').keyup(function() {
        valores = ['Venda', 'cliente', $('#cliente').val(), 'parcial'];
        console.log("buscando: " + valores);
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
                json = JSON.parse(data)

                var comp = [];
                json.forEach(function(dado) {
                    comp.push(dado.id+' | '+dado.cliente.toUpperCase() + ' | R$ ' + dado.mensalidade)
                })

                $("#cliente").autocomplete({
                    source: comp,
                    select: function(e, i) {
                        var clienteN = i.item.value.split(' | ')[1];
                        valores = ['Venda','cliente',clienteN,'complete',i.item.value.split(' | ')[0]]
                        $.ajax({
                            type: "POST",
                            url: 'ajax',
                            dataType: 'html',
                            data: {
                                valores,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(data) {
                                //console.log(data);
                                dados = JSON.parse(data);
                                
                                $('#cliente').val(clienteN);
                                $('#cpf').val(dados['cpf']);
                                $('#veiculo').val(dados['marca'] + " " +
                                    dados['modelo'] + " - " + dados[
                                        'placa']);
                                $('#pagas').val((parseInt(dados['pagas']) +
                                    1) + "/" + dados['parcelas']);
                                $('#mensalidade').val(dados['mensalidade']);
                                $('#mensalidade').focus();
                                $('#total').val(totalP());
                                moeda('total', parseFloat($('#total').val())
                                    .toFixed(2));
                                $('#total').focus();
                                $('#idv').val(dados['id']);
                                $('#vencimento').val(dados['vencimento']);

                            },
                            error: function(data, textStatus, errorThrown) {
                                console.log(data);

                            },
                        })


                    }

                });


            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);

            },
        })
    });
</script>
