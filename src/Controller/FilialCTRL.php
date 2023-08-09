<?php

    namespace Src\Controller;

    use Src\VO\FilialVO;
    use Src\Model\FilialMODEL;

    class FilialCTRL
    {


        private $model;

        public function __construct()
        {
            $this->model = new FilialMODEL();
        }


        public function CadastrarFilialCTRL(FilialVO $vo) : int
        {
            if(empty($vo->getFilial()) or empty($vo->getCod()))
                return 0;
            
            $ret = $this->model->CadastrarFilialMODEL($vo);

            return $ret;
        }


        public function ConsultarFilialCTRL()
        {
            return $this->model->ConsultarFilialMODEL();
        }

    }

?>