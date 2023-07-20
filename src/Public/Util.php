<?php

    namespace Src\Public;

    class Util
    {

        //Retirar caracteres especiais e remover tags em input.
        public static function TratarDados($dados)
        {
            $especiais = array(".", ",", ";", "!", "@", "#", "%", "¨", "*", "(", ")", "+", "-", "=", "§", "$", "|", "\\", ":", "/", "<", ">", "?", "{", "}", "[", "]", "&", "'", '"', "´", "`", "?", '“', '”', '$', "'", "'", ' ');
            $dados = strip_tags($dados);
            $dados = str_replace($especiais, "", $dados);
            return $dados;
        }

        public static function RemoverTags($dados)
        {
            $dados = strip_tags($dados);
            return $dados;
        }


        //Setar Fuso Horário
        public static function SetFusoHorario()
        {
            date_default_timezone_set('America/Sao_Paulo');
        }


        public static function SetData()
        {
            self::SetFusoHorario;
            return date('Y-m-d H:i:s');
        }

    }

?>