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

    $filiais = $ctrl->ConsultarFilialCTRL();

?>