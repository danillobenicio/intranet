<?php
  
    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

    use Src\VO\SetorVO;
    use Src\Controller\SetorCTRL;

    $ctrl = new SetorCTRL();

    if(isset($_POST['btnCadastrar']))
    {
        $vo = new SetorVO();
        
        $vo->setSetor($_POST['setor']);

        $ret = $ctrl->CadastrarSetorCTRL($vo);
    }

    $setores = $ctrl->ConsultarSetorCTRL();



?>