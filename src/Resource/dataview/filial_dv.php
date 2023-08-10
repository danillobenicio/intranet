<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
    use Src\VO\FilialVO;
    use Src\Controller\FilialCTRL;

    $vo = new FilialVO();
    $ctrl = new FilialCTRL();

    if(isset($_POST['btnCadastrar']))
    {

        $vo->setFilial($_POST['filial']);
        $vo->setCod((int)$_POST['cod_atak']);

        $ret = $ctrl->CadastrarFilialCTRL($vo);
        
    }
    else if(isset($_POST['btnAlterar']))
    {
        $vo->setFilial($_POST['filial_alterar']);
        $vo->setCod($_POST['cod_atak_alterar']);
        $vo->setId($_POST['id_alterar']);

        $ret = $ctrl->AlterarFilialCTRL($vo);
    }

    $filiais = $ctrl->ConsultarFilialCTRL();

?>