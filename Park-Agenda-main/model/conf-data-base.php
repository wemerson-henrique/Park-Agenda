<?php
    abstract class conectarDataBase{
        private static string $db = "mysql";
        private static string $host = "localhost";
        private static string $user = "root";
        private static string $pass = "";
        private static string $dbname = "park_agenda";
        private static int $port = 3306;
        private static object $connect;

        public function connect(){
            try {
                self::$connect = new PDO(self::$db . ':host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$dbname, self::$user, self::$pass);
                return self::$connect;
            } catch (Exception $ex) {
                die('ERRO: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador admin@gmail.com.');
            }
        }
    }
?>