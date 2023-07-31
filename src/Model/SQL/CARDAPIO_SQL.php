<?php

    namespace Src\Model\SQL;

    class CARDAPIO_SQL
    {
        public static function INSERIR_CARDAPIO()
        {
            $sql = "INSERT INTO tb_cardapio (data, prato_principal, mistura, salada, bebida, sobremesa, fk_filial) VALUES (? , ? , ? , ? , ? , ? ,?)";
            return $sql;
        }
    }


?>