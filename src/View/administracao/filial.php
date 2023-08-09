<?php
    
    include_once dirname(__DIR__, 2) . '/Resource/dataview/filial_dv.php';

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
                            <h1>Filial</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar Filial</h3>
                    </div>
                    <form id="formCad" method="post" action="filial.php" onsubmit="return ValidarCampos('formCad')">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-9">
                                    <label>Nome</label>
                                    <input type="text" class="form-control obg" placeholder="Nome Filial" name="filial" id="filial">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Código Atak</label>
                                    <input type="number" class="form-control obg" placeholder="Código Atak" name="cod_atak" id="cod_atak">
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
                        <h3 class="card-title">Filiais Cadastradas</h3>
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
                                                    <th>Filial</th>
                                                    <th>Código Atak</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i = 0; $i < count($filiais); $i++) { ?>
                                                <tr>
                                                    <td><?=$filiais[$i]['filial']?></td>
                                                    <td><?=$filiais[$i]['codigo_atak']?></td>
                                                    <td><i class="fa-solid fa-pen-to-square">&emsp;<i class="fa-solid fa-trash"></i></i></td>
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