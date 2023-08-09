<?php
    

    namespace Src\Controller;

    use Src\VO\SetorVO;
    use Src\Model\SetorMODEL;

    class SetorCTRL
    {

        private $model;

        public function __construct()
        {
            $this->model = new SetorMODEL();
        }


        public function CadastrarSetorCTRL(SetorVO $vo) : int
        {
            if(empty($vo->getSetor()))
                return 0;       

            $ret = $this->model->CadastrarSetorMODEL($vo);
            return $ret;
        }

        
        public function ConsultarSetorCTRL()
        {
            return $this->model->ConsultarSetorMODEL();  
        }


        public function AlterarSetorCTRL(SetorVO $vo)
        {
            if(empty($vo->getSetor()) || empty($vo->getId()))
                return 0;
            
            $ret = $this->model->AlterarSetorMODEL($vo);

            return $ret;
            
            
        }
    }




?>