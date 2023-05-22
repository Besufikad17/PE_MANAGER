<?php

    include "../utils/db.php";

    function createUser($fname, $lname, $email, $phonenumber, $password) {
        $connection = new DBConnection();
        $result = $connection->runQuery("insert into user(fname,lname,email,phonenumber,password) values(
            '$fname','$lname','$email','$phonenumber','$password')");
        return $result;
    }
    function emailExists($email) {
        $connection = new DBConnection();
        $result = $connection->runQuery("select * from user where email='$email'");
        return count($result) !== 0;
    }

    function phoneNumberExists($phonenumber) {
        $connection = new DBConnection();
        $result = $connection->runQuery("select * from user where phonenumber='$phonenumber'");
        return count($result) !== 0;
    }

    function getUserByEmail($email) {
        $connection = new DBConnection();
        $result = $connection->runQuery("select * from user where email='$email'");
        return $result;
    }

    function getUserByPhoneNumber($phonenumber) {
        $connection = new DBConnection();
        return $connection->runQuery("select * from user where phonenumber='$phonenumber'");
    }

?>