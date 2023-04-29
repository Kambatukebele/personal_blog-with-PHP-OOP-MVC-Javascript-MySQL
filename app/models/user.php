<?php 

  class User
  {
    private function register(array $POST)
    {
        $firstname = htmlspecialchars(trim($POST['firstname']));
        $lastname = htmlspecialchars(trim($POST['lastname']));
        $email = htmlspecialchars(trim($POST['email']));
        $password = htmlspecialchars(trim($POST['password']));


        //VALIDATION
        $error = array();

        if(empty($firstname))
        {
          $error['firstname'] = 'First name is required';
        }elseif(!preg_match("/^([a-zA-Z' ]+)$/", $firstname)){
          $error['firstname'] = 'First name must contain only letters';
        }

        if(empty($lastname)){
          $error['lastname'] = 'Last name is required';
        }elseif(!preg_match("/^([a-zA-Z' ]+)$/", $lastname)){
          $error['lastname'] = 'Last name must contain only letters';
        }

        if(empty($email)){
          $error['email'] = 'Email is required';
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error['email'] = 'Email is invalid';
        }

        if(empty($password)){
          $error['password'] = 'Password is required';
        }elseif(strlen($password) < 6){
            $error['password'] = 'Password must be at least 6 characters long';
          }
    }  
  }