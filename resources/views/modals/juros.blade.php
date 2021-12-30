<!-- Button trigger modal-->

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">

                    <form action="{{route('juros')}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <td style="text-align:left" >Taxa de juros</td>
                                <td style="text-align:left"> <input maxlength="3" required onkeyup="numeros('taxaJuros',this.value)" type="number"
                                        name="taxaJuros" id="taxaJuros" class="entrada entrada-p" placeholder="{{doubleVal($_SESSION['taxa_juros'])*100}}%">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:left">Forma de juros</td>
                                <td style="text-align:left"><select style="height:30px;width:200px" required name="formaJuros" id="formaJuros" class="entrada entrada-p">
                                        <option value="VLT" selected>Sobre total</option>
                                        <option value="VSE">Sobre total menos entrada</option>
                                        <option value="AAT">Ao ano</option>
                                        <option value="AAE">Ao ano menos entrada</option>
                                        <option value="AMT">Ao mês</option>
                                        <option value="AME">Ao mês menos entrada</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <a><button class="btn btn btn-primary" type="submit">Confirmar</button></a>
                        <a type="button" class="btn btn btn-secondary" data-dismiss="modal">Cancelar</a>
                    </form>

                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalCookie-->


