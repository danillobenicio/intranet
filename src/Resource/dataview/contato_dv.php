<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
    use Src\VO\ContatoVO;
    use Src\Controller\ContatoCTRL;
    use Src\Controller\SetorCTRL;
    use Src\Controller\FilialCTRL;

    $vo = new ContatoVO();
    $ctrl = new ContatoCTRL();
    $ctrl_setor = new SetorCTRL;
    $ctrl_filial = new FilialCTRL();

    $setores = $ctrl_setor->ConsultarSetorCTRL();
    $filiais = $ctrl_filial->ConsultarFilialCTRL();

    if(isset($_POST['btnCadastrar']))
    {

        $vo->setNome($_POST['nome']);
        $vo->setEmail($_POST['email']);
        $vo->setRamal((int)$_POST['ramal']);
        $vo->setSetor((int)$_POST['setor']);
        $vo->setLocal((int)$_POST['local']);

        $ret = $ctrl->CadastrarContato($vo);
    }
    else if(isset($_POST['btnAlterar']))
    {
        $vo->setNome($_POST['nome_alterar']);
        $vo->setEmail($_POST['email_alterar']);
        $vo->setRamal((int)$_POST['ramal_alterar']);
        $vo->setSetor((int)$_POST['setor_alterar']);
        $vo->setLocal((int)$_POST['local_alterar']);
        $vo->setId((int)$_POST['id_alterar']);

        $ret = $ctrl->AlterarContatoCTRL($vo);
    }

    $contatos = $ctrl->ConsultarContatoCTRL();

    
?>