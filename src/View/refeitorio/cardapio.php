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
    <style>
        .esconde-input {
            display: none;
        }
    </style>
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
                            <h1>Cardápio</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar Cardápio</h3>
                    </div>
                    <form id="formCad" method="post" action="cardapio.php" onsubmit="return ValidarCampos('formCad')">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>Filial</label>
                                    <select class="form-control obg" name="filial" id="filial">
                                        <option value="">Selecione</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Data</label>
                                    <input type="date" value="" class="form-control obg" name="data" id="data">
                                </div>
                            </div>

                            <div id="itensDiv" style="display: none;">
                            <h5>Itens do Cardápio</h5>                           
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa-solid fa-utensils"></i>&ensp;Prato Principal
                                                </span>
                                            </div>
                                            <input type="text" class="form-control obg" name="prato_principal"
                                                placeholder="Ex. Arroz, Feijão, Macarrão, etc...">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa-solid fa-utensils"></i>&ensp;Mistura
                                                </span>
                                            </div>
                                            <input type="text" class="form-control obg" name="mistura"
                                                placeholder="Ex. Bife bovino, frango, etc...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa-solid fa-utensils"></i>&ensp;Bebida
                                                </span>
                                            </div>
                                            <input type="text" class="form-control obg" name="prato_principal"
                                                placeholder="Ex. Suco de laranja...">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa-solid fa-utensils"></i>&ensp;Sobremesa
                                                </span>
                                            </div>
                                            <input type="text" class="form-control obg" name="mistura"
                                                placeholder="Ex. Fruta, doce...">
                                        </div>
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
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><i class="fa-solid fa-pen-to-square">&emsp;<i
                                                                class="fa-solid fa-trash"></i></i></td>
                                                </tr>
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
    <script>

            HabilitaItensCardapio();
        
    </script>

</body>

</html>