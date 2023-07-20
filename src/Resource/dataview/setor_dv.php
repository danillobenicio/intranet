<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

    use Src\VO\SetorVO;
    use Src\Controller\SetorCTRL;

    if(isset($_POST['btnCadastrar']))
    {

        $vo = new SetorVO();
        $ctrl = new SetorCTRL();

        $vo->setSetor($_POST['setor']);

        $ret = $ctrl->CadastrarSetor($vo);

    }

?>