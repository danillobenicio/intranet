<?php

    namespace Src\Model;

    use Src\Model\Conexao;
    use Src\VO\SetorVO;
    use Src\Model\SQL\SETOR_SQL;

    class SetorMODEL extends Conexao
    {
        public function CadastrarSetorMODEL(SetorVO $vo)
        {
            $conexao = parent::retornarConexao();
            $sql = $conexao->prepare(SETOR_SQL::INSERIR_SETOR());
            $sql->bindValue(1, $vo->getSetor());

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