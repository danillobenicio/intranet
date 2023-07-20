<?php

    namespace Src\VO;

    use Src\Public\Util;


    class SetorVO
    {
        private $id;
        private $setor;

        public function setId(int $p_id) : void
        {
            $this->id = $p_id;
        }

        public function getId() : int
        {
            return $this->id;
        }

        
        public function setSetor(string $p_setor) : void
        {
            $this->setor = Util::TratarDados($p_setor);
        }

        public function getSetor() : string
        {
            return $this->setor;
        }
    }
?>

