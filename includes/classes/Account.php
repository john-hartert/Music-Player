<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstname($fn);
            $this->validateLastname($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
        }

        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                return;
            }

            //TO DO: check if username exists
        }
            
        private function validateFirstname($fn) {
            if(strlen($un) > 25 || strlen($fn) < 2) {
                array_push($this->errorArray, "Your First name must be between 2 and 25 characters");
                return;
            }
        }
            
        private function validateLastname($ln) {
            if(strlen($un) > 25 || strlen($ln) < 2) {
                array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
                return;
            }
        }
            
        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, "Your emails don't match");
                return;
            }
            if(!filer_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is invalid");
                return;
            }
        }
            
        private function validatePasswords($pw, $pw2) {
                
        }

    }

?>