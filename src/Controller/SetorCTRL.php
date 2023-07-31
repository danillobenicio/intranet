<?php

    namespace Src\Controller;

    use Src\VO\SetorVO;
    use Src\Model\SetorMODEL;

    class SetorCTRL
    {
        public function CadastrarSetorCTRL(SetorVO $vo) : int
        {
            if(empty($vo->getSetor()))
                return 0;
            
            $model = new SetorModel();
            $ret = $model->CadastrarSetorMODEL($vo);

            return $ret;
        }
    }

?>