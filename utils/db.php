<?php

    class DBConnection {

        private $pdo;

        public function __construct(){
            try {
                $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=ASTU", "root", "");
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function runQuery($query){
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

    }

?>