<?php

    include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
    use Src\VO\CardapioVO;
    use Src\Controller\CardapioCTRL;

    if(isset($_POST['btnCadastrar']))
    {

       $vo = new CardapioVO();
       $ctrl = new CardapioCTRL();
       
       $vo->setData($_POST['data']);
       $vo->setPratoPrincipal($_POST['prato_principal']);
       $vo->setMistura($_POST['mistura']);
       $vo->setSalada($_POST['salada']);
       $vo->setBebida($_POST['bebida']);
       $vo->setSobremesa($_POST['sobremesa']);
       $vo->setFilial($_POST['filial']);

       $ret = $ctrl->CadastrarCardapioCTRL($vo);

    }

?>