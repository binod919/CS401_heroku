<?php
      class validation
      {

        //public function __construct();

          public function validatePassword($password)
          {
            if(!isset($password)){
              return 0;
            }
              if (preg_match("/^((?=.*[a-z])(?=.*[A-Z])(?=.*\d))[a-zA-Z\d]{8,}$/", $password)) {
                  return 1;
              } else {
                  return 0;
              }
          }

          public function validateEmail($email)
          {

            if(!isset($email)){
              return 0;
            }

              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  return 0;
              } else {
                  return 1;
              }
          }

          public function validateNames($names)
          {
            if(!isset($names)){
              return 0;
            }
              if (!preg_match("/^[a-zA-Z ]*$/", $names)) {
                  return 0;
              } else {
                return 1;
              }
          }
      }
