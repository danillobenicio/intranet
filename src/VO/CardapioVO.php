<?php

    namespace Src\VO;
    use Src\Public\Util;

    class CardapioVO
    {
        private $id;
        private $filial;
        private $data;
        private $prato_principal;
        private $mistura;
        private $salada;
        private $bebida;
        private $sobremesa;

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


        public function setData(string $p_data) : void
        {
            $this->data = $p_data;
        }
        public function getData() : string
        {
            return $this->data;
        }


        public function setPratoPrincipal(string $p_prato) : void
        {
            $this->prato_principal = Util::TratarDados($p_prato);
        }
        public function getPratoPrincipal() : string
        {
            return $this->prato_principal;
        }


        public function setMistura(string $p_mistura) : void
        {
            $this->mistura = Util::TratarDados($p_mistura);
        }
        public function getMistura() : string
        {
            return $this->mistura;
        }


        public function setSalada(string $p_salada) : void
        {
            $this->salada = Util::TratarDados($p_salada);
        }
        public function getSalada() : string
        {
            return $this->salada;
        }


        public function setBebida(string $p_bebida) : void
        {
            $this->bebida = Util::TratarDados($p_bebida);
        }
        public function getBebida() : string
        {
            return $this->bebida;
        }


        public function setSobremesa(string $p_sobremesa) : void
        {
            $this->sobremesa = Util::TratarDados($p_sobremesa);
        }
        public function getSobremesa() : string
        {
            return $this->sobremesa;
        }
    }


?>