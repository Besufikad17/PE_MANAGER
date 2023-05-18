<?php
    include "models/user.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($cpassword != $password) {
        echo "<script>
                alert('Confirm password properly!!');
             </script>";
    }else {
        
    }
?>