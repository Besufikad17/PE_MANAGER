<?php

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=ASTU", "root", "");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
    function userExists($email, $phonenumber, PDO $pdo){  
        $statement = $pdo->prepare("select * from user where email='$email' and phonenumber='$phonenumber'");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result !== false;
    }
?>