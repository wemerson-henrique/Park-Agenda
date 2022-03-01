<?php

    require_once('conf-data-base.php');

    class Boletim extends conectarDataBase{
        public array $formDados;
        public object $conn;

        public function Cadastrar(){
            $this->conn = $this->connect();
            $data = date("m.d.y");
            $query_boletim = "INSERT INTO boletim (ID, ID_Do_Criador, Nome_Do_Criador, Setor_Do_Criador, Data_Da_Criacao, Titulo, Mensagem) VALUES (NULL, :idDoCriador, (SELECT Nome FROM servidor WHERE ID = :idDoCriador), (SELECT Setor FROM servidor WHERE ID = :idDoCriador), :dataDaCriacao, :Titulo, :Mensagem)";

            $boletim = $this->conn->prepare($query_boletim);

            $boletim->bindParam(':idDoCriador',$this->formDados['idDoCriador']);
            $boletim->bindParam(':dataDaCriacao',$this->formDados['dataDaCriacao']);
            $boletim->bindParam(':Titulo',$this->formDados['Titulo']);
            $boletim->bindParam(':Mensagem',$this->formDados['Mensagem']);

            $boletim->execute();
            if ($boletim->rowCount()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function ListarBoletins(){
            $this->conn = $this->connect();
            $query_boletim = "SELECT * FROM boletim";
            $boletim = $this->conn->prepare($query_boletim);
            $boletim->execute();
            $retorno = $boletim->fetchAll();
            return $retorno;
        }

        public function ListarBoletinsParaExcluir($ID){
            $this->conn = $this->connect();
            $query_boletim = "SELECT * FROM boletim WHERE ID_Do_Criador = :ID";
            $boletim = $this->conn->prepare($query_boletim);
            $boletim->bindParam(':ID',$ID);
            $boletim->execute();
            $retorno = $boletim->fetchAll();
            return $retorno;
        }

        public function ExcluirBoletim(){
            $this->conn = $this->connect();
            $query_boletim = "DELETE FROM boletim WHERE ID = :ID";
            
            $boletim = $this->conn->prepare($query_boletim);

            $boletim->bindParam(':ID',$this->formDados['ID']);

            $boletim->execute();
            if ($boletim->rowCount()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
?>