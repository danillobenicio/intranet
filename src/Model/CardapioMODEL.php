<?php

    namespace Src\Model;

    use Src\Model\Conexao;
    use Src\VO\CardapioVO;
    use Src\Model\SQL\CARDAPIO_SQL;

    class CardapioMODEL extends Conexao
    {
        public function CadastrarCardapioMODEL(CardapioVO $vo)
        {
            $conexao = parent::retornarConexao();
            $sql = $conexao->prepare(CARDAPIO_SQL::INSERIR_CARDAPIO());
            $sql->bindValue(1, $vo->getData());
            $sql->bindValue(2, $vo->getPratoPrincipal());
            $sql->bindValue(3, $vo->getMistura());
            $sql->bindValue(4, $vo->getSalada());
            $sql->bindValue(5, $vo->getBebida());
            $sql->bindValue(6, $vo->getSobremesa());
            $sql->bindValue(7, $vo->getFilial());

            try 
            {
                $sql->execute();
                return 1;
            }
            catch(Exception $ex)
            {
                return -1;
            }
        }
    }

?>