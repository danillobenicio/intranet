<?php
    
    include_once dirname(__DIR__, 2) . '/Resource/dataview/setor_dv.php';

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
                            <h1>Setor</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar Setor</h3>
                    </div>
                    <form id="formCad" method="post" action="setor.php" onsubmit="return ValidarCampos('formCad')">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Nome</label>
                                    <input type="text" class="form-control obg" placeholder="Nome Setor" name="setor" id="setor">
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
                        <h3 class="card-title">Setores Cadastrados</h3>
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
                                                    <th>Setor</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                                <?php for($i = 0; $i < count($setores); $i++) { ?>
                                                <tr>                                                   
                                                    <td><?=$setores[$i]['setor']?></td>
                                                    <td><i data-toggle="modal" data-target="#alterar_setor" class="fa-solid fa-pen-to-square" onclick="CarregarSetor('<?=$setores[$i]['id']?>', '<?=$setores[$i]['setor']?>')"></i>&emsp;<i class="fa-solid fa-trash"></i></td>
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
        <form method="post" action="setor.php" id="formAlt">                            
            <?php include_once 'modais/modal_alterar_setor.php'; ?>
        </form>

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