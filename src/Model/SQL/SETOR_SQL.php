<?php

    namespace Src\Model\SQL;

    class SETOR_SQL
    {
        public static function INSERIR_SETOR()
        {
            $sql = "INSERT INTO tb_setor (setor) VALUES (?)";
            
            return $sql;
        }
    }

?>