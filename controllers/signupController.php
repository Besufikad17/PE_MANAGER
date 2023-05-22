<?php
    require ("../models/user.php");
    require ("../utils/util.php");

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
        if(userExists($email, $phonenumber, $pdo)){
            echo "User already exists!!";
        }else {
            $statement = $pdo->prepare("insert into user(fname,lname,email,phonenumber,password) values(
            '$fname','$lname','$email','$phonenumber','$password')");
            $result = $statement->execute();

            $_SESSION["user"] = new User($fname, $lname, $email, $phonenumber, $password);
            session_start();
            header('Location: /index.php');
            die();
        }            
    }
?>