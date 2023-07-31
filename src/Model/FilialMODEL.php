<?php

    namespace Src\Model;

    use Src\Model\Conexao;
    use Src\VO\FilialVO;
    use Src\Model\SQL\FILIAL_SQL;

    class FilialMODEL extends Conexao
    {
        public function CadastrarFilialMODEL(FilialVO $vo)
        {
            $conexao = parent::retornarConexao();
            $sql = $conexao->prepare(FILIAL_SQL::INSERIR_FILIAL());
            $sql->bindValue(1, $vo->getFilial());
            $sql->bindValue(2, $vo->getCod());

            try
            {
                $sql->execute();
                return 1;
            }
            catch (Exception $ex)
            {
                return -1;
            }
        }
    }

?>