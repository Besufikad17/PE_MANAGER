<?php
    include "models/user.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // form validation


    if($cpassword != $password) {
        echo "<script>
                alert('Confirm password properly!!');
             </script>";
    }else {
        // DB connection

        try {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=ASTU", "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $statement = $pdo->prepare("insert into user(fname,lname,email,phonenumber,password) values(
            '$fname','$lname','$email','$phonenumber','$password')");
        $result = $statement->execute();

        $_SESSION["user"] = new User($fname, $lname, $email, $phonenumber, $password);
        session_start();
        header('Location: index.php');
        exit;
    }
?>