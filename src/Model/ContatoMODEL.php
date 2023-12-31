<?php

    namespace Src\Model;

    use Src\Model\Conexao;
    use Src\VO\ContatoVO;
    use Src\Model\SQL\CONTATO_SQL;

    class ContatoMODEL extends Conexao
    {
        private $conexao;

        public function __construct()
        {
            $this->conexao = parent::retornarConexao();
        }


        public function CadastrarContatoMODEL(ContatoVO $vo)
        {
            $sql = $this->conexao->prepare(CONTATO_SQL::INSERIR_CONTATO());

            $sql->bindValue(1, $vo->getNome());
            $sql->bindValue(2, $vo->getEmail());
            $sql->bindValue(3, $vo->getRamal());
            $sql->bindValue(4, $vo->getLocal());
            $sql->bindValue(5, $vo->getSetor());

            try {
                $sql->execute();
                return 1;
            } catch (\Exception $ex) {
                //echo $ex->getMessage();
                return -1;
            }
        }

        public function ConsultarContatoMODEL()
        {
            $sql = $this->conexao->prepare(CONTATO_SQL::CONSULTAR_CONTATO());
            $sql->execute();
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function AlterarContatoMODEL(ContatoVO $vo)
        {
            $sql = $this->conexao->prepare(CONTATO_SQL::ALTERAR_CONTATO());

            $i = 1;
            $sql->bindValue($i++, $vo->getNome());
            $sql->bindValue($i++, $vo->getEmail());
            $sql->bindValue($i++, $vo->getRamal());
            $sql->bindValue($i++, $vo->getSetor());
            $sql->bindValue($i++, $vo->getLocal());          
            $sql->bindValue($i++, $vo->getId());

            try {
                $sql->execute();
                return 3;
            } catch (\Exception $ex) {
                echo $ex->getMessage();
                return -1;
            }

        }
    }

?>