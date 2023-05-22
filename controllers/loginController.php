<?php
    include "models/user.php";
    include "models/db.php";

    $email_or_phonenumber = $_POST["phonenumber-email"];
    $password = $_POST["password"];
    $isLoggedIn = false;

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=ASTU", "root", "");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
    $statement = $pdo->prepare('select * from user where email='.$email_or_phonenumber.' passoword='.$password);
    $result = $statement->execute();
    var_dump($result);
    // $isLoggedIn = true;
    // $_SESSION["user"] = "john";
    // session_start();
    // header('Location: index.php');
    // exit;

    if(!$isLoggedIn) {
        echo "):";
        echo "<script> 
                alert('Invalid credentials!!');
             </script>";
    }
?>