<?php

    namespace Src\Controller;

    use Src\VO\CardapioVO;
    use Src\Model\CardapioMODEL;

    class CardapioCTRL
    {
        public function CadastrarCardapioCTRL(CardapioVO $vo)
        {
            if(empty($vo->getFilial()) || empty($vo->getPratoPrincipal()) || empty($vo->getMistura()) || empty($vo->getSalada()) || empty($vo->getBebida()) || empty($vo->getSobremesa()))
                return 0;
            
            $model = new CardapioMODEL();
            $ret = $model->CadastrarCardapioMODEL($vo);
            return $ret;
        }
    }

?>
