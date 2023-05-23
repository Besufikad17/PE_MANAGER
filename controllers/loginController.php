<?php
    include "../models/user.php";
    include "../utils/util.php";
    
    $email_or_phonenumber = $_POST["phonenumber-email"];
    $password = $_POST["password"];
    $isValid = false;

    try {
        $params = [ $email_or_phonenumber, $password ];

        // form validation
        checkInputs($params);

        // fetching data from database
        $result = getUser($email_or_phonenumber);
        $user = new User($result[0]["fname"], $result[0]["lname"], $result[0]["email"], $result[0]["phonenumber"], $result[0]["password"]);
        
        // checking credentials
        login($password, $user->getPassword());

        // session management
        setcookie("email", $user->getEmail() , time() + (86400 * 30), "/");
        header('Location: /index.php');
        die();
    } catch (Exception $e) {
        // TODO: Better Exception handling
        echo $e;
    }
?>