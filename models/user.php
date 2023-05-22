<?php
    class User {

        private $fname;
        private $lname;

        private $email;
        private $phonenumber;
        private $password;

        function User($fname, $lname, $email, $phonenumber, $password){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->email = $email;
            $this->phonenumber = $phonenumber;
            $this->password = $password;
        }

        public function getFname() {
            return $this->fname;
        }

        public function getLname() {
            return $this->lname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPhoneNumber() {
            return $this->phonenumber;
        }

        public function getPassword() {
            return $this->password;
        }
    }

?>