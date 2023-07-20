<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
    use Src\VO\ContatoVO;
    use Src\Controller\ContatoCTRL;

    if(isset($_POST['btnCadastrar']))
    {

        $vo = new ContatoVO();
        $ctrl = new ContatoCTRL();

        $vo->setNome($_POST['nome']);
        $vo->setEmail($_POST['email']);
        $vo->setRamal((int)$_POST['ramal']);
        $vo->setSetor((int)$_POST['setor']);
        $vo->setLocal((int)$_POST['local']);

        $ret = $ctrl->CadastrarContato($vo);
    }

?>