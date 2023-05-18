<?php
    include "models/user.php";
    include "models/db.php";

    $email_or_phonenumber = $_POST["email-phonenumber"];
    $password = $_POST["password"];
    $isLoggedIn = false;

    foreach($users as $user){
        echo $user->getEmail(), " ", $user->getPhoneNumber(), " ", $user->getPassword(); 
        // if($user->getPassword() == $password && ($user->getEmail() == $email_or_phonenumber || $user->getPhoneNumber() == $email_or_phonenumber)){
        //     echo "yay";
        //     $isLoggedIn = true;
        //     // $_SESSION["user"] = $user->getFname();
        //     // session_start();
        //     // header('Location: index.php');
        //     // exit;
        // }
    }

    // if(!$isLoggedIn) {
    //     echo "):";
    //     // echo "<script>
    //     //         alert('Invalid credentials!!');
    //     //      </script>";
    // }
?>