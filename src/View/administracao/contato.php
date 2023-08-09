<?php
    
    include_once dirname(__DIR__, 2) . '/Resource/dataview/contato_dv.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
        include_once PATH . '/Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <?php
            include_once PATH . '/Template/_includes/_topo.php';
            include_once PATH . '/Template/_includes/_menu.php';
         ?>


        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Contato</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar Contato</h3>
                    </div>
                    <form id="formCad" method="post" action="contato.php" onsubmit="return ValidarCampos('formCad')">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label>Nome</label>
                                    <input type="text" class="form-control obg" placeholder="Nome" name="nome" id="nome">
                                </div>
                                <div class="form-group col-md-5">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control obg" placeholder="E-mail" name="email" id="email">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Ramal</label>
                                    <input type="number" class="form-control obg" placeholder="Ramal" name="ramal" id=ramal>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Setor</label>
                                        <select class="form-control obg" name="setor" id="setor">
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
                                        <select class="form-control obg" name="local" id="local">
                                            <option value="">Selecione</option>
                                            <?php for($i = 0; $i < count($filiais); $i++) { ?>
                                                <option value="<?=$filiais[$i]['id']?>"><?=$filiais[$i]['filial']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-success" name="btnCadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contatos Cadastrados</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Pesquisar">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>E-mail</th>
                                                    <th>Ramal</th>
                                                    <th>Setor</th>
                                                    <th>Localização</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i = 0; $i < count($contatos); $i++) { ?>
                                                <tr>
                                                    <td><?=$contatos[$i]['nome']?></td>
                                                    <td><?=$contatos[$i]['email']?></td>
                                                    <td><?=$contatos[$i]['ramal']?></td>
                                                    <td><?=$contatos[$i]['setor']?></td>
                                                    <td><?=$contatos[$i]['filial']?></td>
                                                    <td><i class="fa-solid fa-pen-to-square">&emsp;<i
                                                                class="fa-solid fa-trash"></i></i></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php
            include_once PATH . 'Template/_includes/_footer.php';
            
        ?>
    </div>

    <?php
         include_once PATH . 'Template/_includes/_scripts.php'; 
         include_once PATH . 'Template/_includes/_msg.php';
    ?>

</body>

</html>