<div class="modal fade" id="alterar_setor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Setor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group col-md-12">
                        <input name="id_alterar" id="id_alterar" type="hidden">
                        <label>Setor</label>
                        <input type="text" class="form-control obg" name="setor_alterar" id="setor_alterar">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>
                <button onclick="return ValidarCampos('formAlt')" name="btnAlterar" class="btn btn-sm btn-warning">Alterar</button>
            </div>
        </div>
    </div>
</div>