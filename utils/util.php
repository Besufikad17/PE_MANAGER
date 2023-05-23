<?php

    include "../utils/db.php";
    include "../utils/exceptions.php";

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

    function checkInputs(array $inputs) {
        foreach($inputs as $input) {
            if($input == ""){
                throw new IncompleteInputException("Please enter all fields!!");
            }
        }
    }

    function getUser($input) {
        if(emailExists($input)) {
            return getUserByEmail($input);
        }else if(phoneNumberExists($input)) {
            return getUserByPhoneNumber($input);
        }else {
            throw new UserNotFoundException("User doesn't exist!!");
        }
    }

    function login($password, $hashed_password) {
        if(password_verify($password, $hashed_password)) {
            return;
        }else {
            throw new InvalidCredentialException("Invalid credentials!!");
        }
    }

    function signup($fname, $lname, $email, $phonenumber, $password) {
        if(emailExists($email) || phoneNumberExists($phonenumber)){
            throw new UserAlreadyExistsException("User alredy exists!!");
        }else {
            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
            return createUser($fname, $lname, $email, $phonenumber, $hashed_pwd);
        }
    }

?>