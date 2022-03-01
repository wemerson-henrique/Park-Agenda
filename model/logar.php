<?php
    require_once('conf-data-base.php');

    class Logar extends conectarDataBase{
        public array $formDados;
        public object $conn;

        public function Logar(): array{
            $this->conn = $this->connect();
            $query_usuario = "SELECT ID, Nome, Usuario FROM servidor WHERE Usuario = :Usuario AND Senha = :Senha";
            $cad_usuario = $this->conn->prepare($query_usuario);

            $cad_usuario->bindParam(':Usuario',$this->formDados['nomeDeUsuario']);
            $cad_usuario->bindParam(':Senha',$this->formDados['senhaDoUsuario']);

            $cad_usuario->execute();
            $retorno = $cad_usuario->fetchAll();
            return $retorno;
        }
    }
?>