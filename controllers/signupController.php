<?php
    require ("../models/user.php");
    require ("../utils/util.php");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


    try {

        $params = [$fname, $lname, $email, $phonenumber, $password, $cpassword];

        //form validation
        checkInputs($params);

        if($cpassword != $password) {
            echo "<script>
                    alert('Confirm password properly!!');
                 </script>";
        }

        // inserting new user
        $result = signup($fname, $lname, $email, $phonenumber, $password);
        $user = new User($result[0]["fname"], $result[0]["lname"], $result[0]["email"], $result[0]["phonenumber"], $result[0]["password"]);

        // session management
        // FIXME: Storing object in session
        session_start();
        $_SESSION["user"] = serialize($user);
        header('Location: /index.php');
        die();

    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>