<?php
    class Employee {

        private $name;

        private $profile_picture_url;

        private $gender;

        private $salary;

        private $date_of_birth;

        function Employee($name, $profile_picture_url, $gender, $salary, $date_of_birth) {
            $this->name = $name;
            $this->profile_picture_url = $profile_picture_url;
            $this->gender = $gender;
            $this->salary = $salary;
            $this->date_of_birth = $date_of_birth;
        }
    }
?>