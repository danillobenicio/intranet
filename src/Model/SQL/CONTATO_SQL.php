<?php

    namespace Src\Model\SQL;

    class CONTATO_SQL
    {
        public static function INSERIR_CONTATO()
        {
            $sql = 'INSERT INTO tb_contato (nome, email, ramal, fk_filial, fk_setor) VALUES (?, ?, ?, ?, ?)';
            return $sql;
        }


        public static function CONSULTAR_CONTATO()
        {
            $sql = 'SELECT
                        tc.id, 
                        tc.nome, 
                        tc.email, 
                        tc.ramal,
                        tf.filial,
                        ts.setor,
                        tf.id as id_filial,
                        ts.id as id_setor
                    FROM
                        tb_contato AS tc
                    INNER JOIN tb_filial AS tf ON tf.id = tc.fk_filial
                    INNER JOIN tb_setor AS ts ON ts.id = tc.fk_setor
                    ORDER BY nome';

            return $sql;
        }


        public static function ALTERAR_CONTATO()
        {
            $sql = 'UPDATE tb_contato SET nome = ?,  email = ?, ramal = ?, fk_setor = ?, fk_filial = ? WHERE id = ?';
            return $sql;
        }
    }

?>