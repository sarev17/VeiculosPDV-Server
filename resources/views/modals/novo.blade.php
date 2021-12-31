<!-- Button trigger modal-->

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">



                    <form action="{{ route('novo_user') }}" method="post">
                        @csrf

                        <h5>Dados da empresa</h5>

                        <div>
                            <div class="label-float row">
                                <input required type="text" name="nomem" id="nomem" class="entrada entrada-sg"
                                    placeholder="NOME EMPRESA">
                            </div>
                            <div class="label-float row">
                                <input  maxlength="14" onkeyup="cpfF(this.value)" required type="text" name="cpfm"
                                    id="cpfm" class="entrada entrada-g" placeholder="CNPJ/CPF">

                            </div>
                        </div>
                        <div>
                            <div class="label-float row">
                                <input  maxlength="9" onkeyup="pesquisacep(this.value)" required type="text" name="cepm"
                                    id="cepm" class="entrada entrada-m" placeholder="CEP">

                            </div>
                            <div class="label-float row">
                                <input  required type="text" name="ruam" id="ruam" class="entrada entrada-g"
                                    placeholder="RUA">

                            </div>
                            <div class="label-float row">
                                <input required type="text" name="bairrom" id="bairrom" class="entrada entrada-m"
                                    placeholder="BAIRRO">

                            </div>
                            <div class="label-float row">
                                <input required type="text" name="numerom" id="numerom" class="entrada entrada-p"
                                    placeholder="NUMERO">

                            </div>
                        </div>
                        <div>
                            <div class="label-float row">
                                <input required type="text" name="cidadem" id="cidadem" class="entrada entrada-mg"
                                    placeholder="CIDADE">

                            </div>
                            <div class="label-float row">
                                <input required type="text" name="estadom" id="estadom" class="entrada entrada-m"
                                    placeholder="ESTADO">

                            </div>
                        </div>
                        <h5>Dados da autenticação</h5>
                        <div>
                            <div class="label-float row">
                                <input required type="text" name="userm" id="userm" class="entrada entrada-mg"
                                    placeholder="USUARIO">

                            </div>
                            <div class="label-float row">
                                <input required type="text" name="senham" id="senham" class="entrada entrada-m"
                                    placeholder="SENHA">
                            </div>
                            <div class="label-float row">
                                <select style="height:30px;width:200px" required name="nivelm" id="nivelm" class="entrada entrada-p">
                                        <option value="administrador" selected>Administrador</option>
                                        <option value="gerente">Gerente</option>
                                        <option value="funcionario">Funcionario</option>
                                </select>
                            </div>
                            <div class="label-float row">
                                <input required type="text" name="taxam" id="taxam" class="entrada entrada-m"
                                    placeholder="TAXA JUROS">
                            </div>
                            <div class="label-float row">
                                <select style="height:30px;width:200px" required name="formam" id="formam" class="entrada entrada-p">
                                        <option value="VLT" selected>Sobre total</option>
                                        <option value="VSE">Sobre total menos entrada</option>
                                        <option value="AAT">Ao ano</option>
                                        <option value="AAE">Ao ano menos entrada</option>
                                        <option value="AMT">Ao mês</option>
                                        <option value="AME">Ao mês menos entrada</option>
                                    </select>
                            </div>
                            <div class="label-float row">
                                <input required type="date" name="vencimentom" id="taxam" class="entrada entrada-m"
                                    placeholder="Vencimento"><label>vencimento</label>
                            </div>
                        </div>
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

