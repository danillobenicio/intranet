<?php
    
    namespace Src\VO;

    use Src\Public\Util;

    class ContatoVO
    {

        private $id;
        private $nome;
        private $email;
        private $ramal;
        private $setor;
        private $local;

        public function setId(int $p_id) : void
        {
            $this->id = $p_id;
        }

        public function getId() : int
        {
            return $this->id;
        }


        public function setNome(string $p_nome) : void
        {
            $this->nome = Util::TratarDados($p_nome);
        }

        public function getNome() : string
        {
            return $this->nome;
        }


        public function setEmail(string $p_email) : void
        {
            $this->email = Util::RemoverTags($p_email);
        }

        public function getEmail() : string
        {
            return $this->email;
        }


        public function setRamal(int $p_ramal) : void
        {
            $this->ramal = Util::RemoverTags($p_ramal);
        }

        public function getRamal() : int
        {
            return $this->ramal;
        }


        public function setSetor(int $p_setor) : void
        {
            $this->setor = Util::TratarDados($p_setor);
        }

        public function getSetor() : int
        {
            return $this->setor;
        }


        public function setLocal(int $p_local) : void
        {
            $this->local = Util::TratarDados($p_local);
        }

        public function getLocal() : int
        {
            return $this->local;
        }
    }

 /*
Esta é a classe ContatoVO, que representa um objeto de valor (Value Object) contendo informações de contato. 
Essa classe é responsável por armazenar e fornecer acesso às propriedades relacionadas ao contato, como ID, nome, e-mail, ramal, setor e local.

 Propriedades:

private $id: Armazena o ID do contato. Deve ser um número inteiro.
private $nome: Armazena o nome do contato. Deve ser uma string.
private $email: Armazena o e-mail do contato. Deve ser uma string.
private $ramal: Armazena o ramal do contato. Deve ser um número inteiro.
private $setor: Armazena o setor do contato. Deve ser um número inteiro.
private $local: Armazena o local do contato. Deve ser um número inteiro.
Métodos:

public function setId(int $p_id) : void: Define o valor do ID do contato.
public function getId() : int: Obtém o valor do ID do contato.
public function setNome(string $p_nome) : void: Define o valor do nome do contato.
public function getNome() : string: Obtém o valor do nome do contato.
public function setEmail(string $p_email) : void: Define o valor do e-mail do contato.
public function getEmail() : string: Obtém o valor do e-mail do contato.
public function setRamal(int $p_ramal) : void: Define o valor do ramal do contato.
public function getRamal() : int: Obtém o valor do ramal do contato.
public function setSetor(int $p_setor) : void: Define o valor do setor do contato.
public function getSetor() : int: Obtém o valor do setor do contato.
public function setLocal(int $p_local) : void: Define o valor do local do contato.
public function getLocal() : int: Obtém o valor do local do contato.
 */

?>