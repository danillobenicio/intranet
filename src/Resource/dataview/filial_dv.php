<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
    use Src\VO\FilialVO;
    use Src\Controller\FilialCTRL;

    if(isset($_POST['btnCadastrar']))
    {

        $vo = new FilialVO();
        $ctrl = new FilialCTRL();

        $vo->setFilial($_POST['filial']);
        $vo->setCod((int)$_POST['cod_atak']);

        //print_r($vo);

        $ret = $ctrl->CadastrarFilialCTRL($vo);
        
    }

?>