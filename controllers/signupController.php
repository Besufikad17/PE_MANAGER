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

    if($fname == "" || $lname == "" || $email == "" || $phonenumber == "" || $password == "" || $cpassword == ""){
        echo "<script>
                alert('Please enter all fields!!');
             </script>";
    }

    if($cpassword != $password) {
        echo "<script>
                alert('Confirm password properly!!');
             </script>";
    }else {
        if(emailExists($email) || phoneNumberExists($phonenumber)){
            echo "<script>
                    alert('User already exists!!');
                 </script>";
        }else {
            createUser($fname, $lname, $email, $phonenumber, $password);
            session_start();
            $_SESSION["user"] = serialize(new User($fname, $lname, $email, $phonenumber, $password));
            header('Location: /index.php');
            die();
        }            
    }
?>