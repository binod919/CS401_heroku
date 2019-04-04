<?php
      class validation {

        //public function __construct();

          public function validatePassword($password){
              if(preg_match("/^((?=.*[a-z])(?=.*[A-Z])(?=.*\d))[a-zA-Z\d]{8,}$/", $password)){
              return 1;
            }else {
              return 0;
            }
          }
      }
?>
