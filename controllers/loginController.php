<?php
    include "../models/user.php";
    include "../utils/util.php";

    $email_or_phonenumber = $_POST["phonenumber-email"];
    $password = $_POST["password"];
    $isValid = false;

    if($email_or_phonenumber == "" || $password == "") {
        echo "<script>
                alert('Please enter all fields!!');
              </script>";
    }

    if(emailExists($email_or_phonenumber)) {
        $result = getUserByEmail($email_or_phonenumber);
        $user = new User($result["fname"], $result["lname"], $result["email"], $result["phonenumber"], $result["password"]);
        if($user->getPassword() == $password){
            echo "<script>
                    alert('Invalid credentials!!');
                  </script>";
        }else{
            $_SESSION["user"] =  $user;
            session_start();
            header('Location: /index.php');
            die();
        }
    }else if(phoneNumberExists($email_or_phonenumber)) {
        $result =getUserByPhoneNumber($email_or_phonenumber)[0];
        $user = new User($result["fname"], $result["lname"], $result["email"], $result["phonenumber"], $result["password"]);
        if($user->getPassword() !== $password){
            echo "<script>
                    alert('Invalid credentials!!');
                 </script>";
        }else{
            $_SESSION["user"] = $user;
            session_start();
            header('Location: /index.php');
            die();
        }
    }else {
        echo "<script>
                alert('User doesn't exist!!');
              </script>";
    }
    
?>