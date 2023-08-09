<?php

    namespace Src\Model\SQL;

    class FILIAL_SQL
    {
        public static function INSERIR_FILIAL()
        {
            $sql = 'INSERT INTO tb_filial (filial, codigo_atak) VALUES (?, ?)';
            return $sql;
        }

        public static function CONSULTAR_FILIAL()
        {
            $sql = 'SELECT id, filial, codigo_atak FROM tb_filial ORDER BY filial';
            return $sql;
        }
    }

?>