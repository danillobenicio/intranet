<?php

    namespace Src\Controller;

    use Src\VO\FilialVO;
    use Src\Model\FilialMODEL;

    class FilialCTRL
    {

        public function CadastrarFilialCTRL(FilialVO $vo) : int
        {
            if(empty($vo->getFilial()) or empty($vo->getCod()))
                return 0;
            
            $model = new FilialMODEL();

            $ret = $model->CadastrarFilialMODEL($vo);

            return $ret;
        }

    }

?>