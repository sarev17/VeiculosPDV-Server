<!-- Button trigger modal-->

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">

                    @php 
                        use App\Models\Info;
                        $v = Info::where('user_id',$_SESSION['id'])->get()->first();
                    @endphp

                    <form action="{{ route('info') }}" method="post">
                        @csrf

                        <h5>DADOS DA EMPRESA</h5>

                        <div>
                            <div class="label-float row">
                                <input required type="text" value="{{isset($v->nome) ? $v->nome : ''}}" name="nomem" id="nomem" class="entrada entrada-sg"
                                    placeholder="NOME EMPRESA">
                            </div>
                            <div class="label-float row">
                                <input value="{{isset($v->cpf) ? $v->cpf : ''}}" maxlength="14" onkeyup="cpfF(this.value)" required type="text" name="cpfm"
                                    id="cpfm" class="entrada entrada-g" placeholder="CNPJ/CPF">

                            </div>
                        </div>
                        <div>
                            <div class="label-float row">
                                <input value="{{isset($v->cep) ? $v->cep : ''}}" maxlength="9" onkeyup="pesquisacep(this.value)" required type="text" name="cepm"
                                    id="cepm" class="entrada entrada-m" placeholder="CEP">

                            </div>
                            <div class="label-float row">
                                <input value="{{isset($v->rua) ? $v->rua : ''}}" required type="text" name="ruam" id="ruam" class="entrada entrada-g"
                                    placeholder="RUA">

                            </div>
                            <div class="label-float row">
                                <input value="{{isset($v->bairro) ? $v->bairro : ''}}" required type="text" name="bairrom" id="bairrom" class="entrada entrada-m"
                                    placeholder="BAIRRO">

                            </div>
                            <div class="label-float row">
                                <input value="{{isset($v->numero) ? $v->numero : ''}}" required type="text" name="numerom" id="numerom" class="entrada entrada-p"
                                    placeholder="NUMERO">

                            </div>
                        </div>
                        <div>
                            <div class="label-float row">
                                <input value="{{isset($v->cidade) ? $v->cidade : ''}}" required type="text" name="cidadem" id="cidadem" class="entrada entrada-mg"
                                    placeholder="CIDADE">

                            </div>
                            <div class="label-float row">
                                <input value="{{isset($v->estado) ? $v->estado : ''}}" required type="text" name="estadom" id="estadom" class="entrada entrada-m"
                                    placeholder="ESTADO">

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

