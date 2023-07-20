<?php

    namespace Src\Controller;

    use Src\VO\SetorVO;

    class SetorCTRL
    {

        public function CadastrarSetor(SetorVO $vo) :  int
        {
            if(empty($vo->getSetor()))
            {
                return 0;
            }
            return 1;
        }

    }

?>