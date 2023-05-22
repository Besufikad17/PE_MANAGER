<?php

    include "models/user.php";
    
    function connectDB() {
        try {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=ASTU", "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    function userExists(User $user){

    }

?>