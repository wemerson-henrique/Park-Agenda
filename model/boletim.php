<?php

    require_once('conf-data-base.php');

    class Boletim extends conectarDataBase{
        public array $formDados;
        public object $conn;

        public function Cadastrar(){
            $this->conn = $this->connect();
            $query_usuarios = "INSERT INTO boletim (ID, Nome_Do_Criador, Setor_Do_Criador, Data_Da_Criacao, Titulo, Mensagem) VALUES (NULL, :nomeDoCriador, :setorDoCriador, :dataDaCriacao, :Titulo, :Mensagem)";

            $cad_usuario = $this->conn->prepare($query_usuarios);

            $cad_usuario->bindParam(':nomeDoCriador',$this->formDados['nomeDoCriador']);
            $cad_usuario->bindParam(':setorDoCriador',$this->formDados['setorDoCriador']);
            $cad_usuario->bindParam(':dataDaCriacao',$this->formDados['dataDaCriacao']);
            $cad_usuario->bindParam(':Titulo',$this->formDados['Titulo']);
            $cad_usuario->bindParam(':Mensagem',$this->formDados['Mensagem']);

            $cad_usuario->execute();
            if ($cad_usuario->rowCount()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
?>