<?php

    namespace Src\Model\SQL;

    class FILIAL_SQL
    {
        public static function INSERIR_FILIAL()
        {
            $sql = "INSERT INTO tb_filial (filial, codigo_atak) VALUES (?, ?)";
            return $sql;
        }
    }

?>