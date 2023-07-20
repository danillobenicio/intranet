<?php

    namespace Src\VO;

    use Src\Public\Util;

    class FilialVO
    {

        private $id;
        private $filial;
        private $cod_atak;

        public function setId(int $p_id) : void
        {
            $this->id = $p_id;
        }

        public function getId() : int
        {
            return $this->id;
        }


        public function setFilial(string $p_filial) : void
        {
            $this->filial = Util::TratarDados($p_filial);
        }

        public function getFilial() : string
        {
            return $this->filial;
        }


        public function setCod(int $p_cod) : void
        {
            $this->cod_atak = Util::TratarDados($p_cod);
        }

        public function getCod() : int
        {
            return $this->cod_atak;
        }

    }


?>