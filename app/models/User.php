<?php 

  class User
  {
    public function register_USER($POST)
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

        if(empty($error)){
          
          //REGISTER USER
          $database = new Database(); 
          $userURL = $this->user_url(60); 
          $data = array(); 
          $data['firstname'] = $firstname;
          $data['lastname'] = $lastname;
          $data['email'] = $email;
          $data['password'] = password_hash($password, PASSWORD_DEFAULT);
          $data['user_url'] = $userURL;
          $data['is_admin'] = "0"; 

          $query = "INSERT INTO users (firstname, lastname, email, password, user_url, is_admin) VALUES (:firstname, :lastname, :email, :password, :user_url, :is_admin)";

          $result = $database->db_Write($query, $data);

          if($result){
            return $result;
          }

          return false; 
         
        }

    }
    // public function login(array $POST){

    // }

    public  function user_url($lenght)
    {
      $array = array(
          0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
          'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
          'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
      );

      $text = ""; 

      for($i = 0; $i < count($array); $i++){            
          $random = rand(0, 60);
          $text.= $array[$random];
      }

      return $text;
    }
  }