<?php

    namespace Src\Model\SQL;

    class SETOR_SQL
    {
        public static function INSERIR_SETOR() : string
        {
            $sql = 'INSERT INTO tb_setor (setor) VALUES (?)';         
            return $sql;
        }

        public static function SELECIONAR_SETOR() : string
        {
            $sql = 'SELECT id, setor FROM tb_setor ORDER BY setor';
            return $sql;
        }

        public static function ALTERAR_SETOR()
        {
            $sql = 'UPDATE tb_setor SET setor = ? WHERE id = ?';
            return $sql;
        }

    }

?>