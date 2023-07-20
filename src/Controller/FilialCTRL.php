<?php

    namespace Src\Controller;

    use Src\VO\FilialVO;

    class FilialCTRL
    {

        public function CadastrarFilialCTRL(FilialVO $vo) : int
        {
            if(empty($vo->getFilial()) or empty($vo->getCod()))
                return 0;
            return 1;
        }

    }

?>