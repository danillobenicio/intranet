<div class="modal fade" id="alterar_filial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Filial</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="id_alterar" id="id_alterar">
                    <div class="form-group col-md-8">
                        <label>Nome</label>
                        <input type="text" class="form-control obg" placeholder="Nome Filial" name="filial_alterar" id="filial_alterar">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Código Atak</label>
                        <input type="number" class="form-control obg" placeholder="Código Atak" name="cod_atak_alterar"
                            id="cod_atak_alterar">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>
                <button onclick="return ValidarCampos('formAlt')" name="btnAlterar"
                    class="btn btn-sm btn-warning">Alterar</button>
            </div>
        </div>
    </div>
</div>