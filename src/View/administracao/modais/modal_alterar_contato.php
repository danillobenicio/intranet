<div class="modal fade" id="alterar_contato">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Contato</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="formCad" method="post" action="contato.php" onsubmit="return ValidarCampos('formCad')">
                        <div class="card-body">
                            <input type="hidden" name="id_alterar" id="id_alterar">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label>Nome</label>
                                    <input type="text" class="form-control obg" placeholder="Nome" name="nome_alterar" id="nome_alterar">
                                </div>
                                <div class="form-group col-md-5">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control obg" placeholder="E-mail" name="email_alterar" id="email_alterar">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Ramal</label>
                                    <input type="number" class="form-control obg" placeholder="Ramal" name="ramal_alterar" id=ramal_alterar>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Setor</label>
                                        <select class="form-control obg" name="setor_alterar" id="setor_alterar">
                                            <option value="">Selecione</option>
                                            <?php for($i = 0; $i < count($setores); $i++) { ?>
                                                <option value="<?=$setores[$i]['id']?>"><?=$setores[$i]['setor']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Local</label>
                                        <select class="form-control obg" name="local_alterar" id="local_alterar">
                                            <option value="">Selecione</option>
                                            <?php for($i = 0; $i < count($filiais); $i++) { ?>
                                                <option value="<?=$filiais[$i]['id']?>"><?=$filiais[$i]['filial']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>
                <button onclick="return ValidarCampos('formAlt')" name="btnAlterar"
                    class="btn btn-sm btn-warning">Alterar</button>
            </div>
        </div>
    </div>
</div>