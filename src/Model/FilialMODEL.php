<?php

    namespace Src\Model;

use Exception;
use Src\Model\Conexao;
    use Src\VO\FilialVO;
    use Src\Model\SQL\FILIAL_SQL;

    class FilialMODEL extends Conexao
    {

        private $conexao;

        public function __construct()
        {
            $this->conexao = parent::retornarConexao();
        }


        public function CadastrarFilialMODEL(FilialVO $vo)
        {
            $sql = $this->conexao->prepare(FILIAL_SQL::INSERIR_FILIAL());
            $sql->bindValue(1, $vo->getFilial());
            $sql->bindValue(2, $vo->getCod());

            try
            {
                $sql->execute();
                return 1;
            }
            catch (\Exception $ex)
            {
                return -1;
            }
        }

        public function ConsultarFilialMODEL()
        {
            $sql = $this->conexao->prepare(FILIAL_SQL::CONSULTAR_FILIAL());
            $sql->execute();
            return $sql->fetchALL(\PDO::FETCH_ASSOC);
        }

        public function AlterarFilialMODEL(FilialVO $vo)
        {
            $sql = $this->conexao->prepare(FILIAL_SQL::ALTERAR_FILIAL());
            $sql->bindValue(1, $vo->getFilial());
            $sql->bindValue(2, $vo->getCod());
            $sql->bindValue(3, $vo->getId());

            try
            {
               $sql->execute();
               return 3;
            }
            catch(\Exception $ex)
            {
                echo $ex->getMessage();
                return -1;
            }

        }

    }

?>