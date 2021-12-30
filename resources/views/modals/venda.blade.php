<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCookie1">Cookies</button>

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">

                    <p class="pt-3 pr-2">Insira a placa do veículo</p>

                    <form action="{{ route('principal') }}" method="get">
                        <input id="placa" style="height:38px;text-transform:uppercase" class="entrada entrada-m"
                            type="text" placeholder="PLACA">
                        <a type="submit" class="btn btn btn-primary ">Confirmar</a>
                        <a type="button" class="btn btn btn-secondary" data-dismiss="modal">Cancelar</a>
                    </form>

                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalCookie-->


