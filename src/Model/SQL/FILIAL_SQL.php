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

        public static function ALTERAR_FILIAL()
        {
            $sql = 'UPDATE tb_filial SET filial = ?, codigo_atak = ? WHERE  id = ?';
            return $sql;
        }
    }

?>