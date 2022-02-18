<?php

    include('conf-data-base.php');

    class Servidor extends conectarDataBase{
        public array $formDados;
        public object $conn

        public function Listar(): array {
            $this->conn = $this->connect();
            $query_usuarios = "SELECT ID, Nome, CPF, Endereco, Usuario, Senha FROM servidor ORDER BY ID DESC LIMIT 40";
            $result_users = $this->conn->prepare($query_usuarios);
            $result_users->execute();
            $retorno = $result_users->fetchAll();
            return $retorno;
        }

        public function Cadastrar(){
            $this->conn = $this->connect();
            $query_usuarios = "INSERT INTO servidor (ID, Nome, CPF, RG, Endereco, Usuario, Senha) VALUES (NULL, :Nome, :CPF, :RG, :Endereco, :Usuario, :Senha)";
            $cad_usuario = $this->conn->prepare($query_usuarios);

            $cad_usuario->bindParam(':Nome',$this->formDados['Nome']);
            $cad_usuario->bindParam(':CPF',$this->formDados['CPF']);
            $cad_usuario->bindParam(':RG',$this->formDados['RG']);
            $cad_usuario->bindParam(':Endereco',$this->formDados['Endereco']);
            $cad_usuario->bindParam(':Usuario',$this->formDados['Usuario']);
            $cad_usuario->bindParam(':Senha',$this->formDados['Senha']);

            $cad_usuario->execute();
            if ($cad_usuario->rowCount()) {
                return TRUE
            } else {
                return FALSE
            }
        }
        
        public function VerificarSeJaExiste(){
            $this->conn = $this->connect();
            $query_usuario = "SELECT nome FROM servidor WHERE nome = :nome";
            $cad_usuario = $this->conn->prepare($query_usuario);

            $cad_usuario->bindParam(':nome',$this->dadosRecebidos['nome']);

            $cad_usuario->execute();
            if($cad_usuario->rowCount()){
                return true;
            }else {
                return false;
            }
        }
    }
?>