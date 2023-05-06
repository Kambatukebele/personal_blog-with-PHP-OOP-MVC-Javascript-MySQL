<?php

  class Register extends Controller {

    public function index()
    {
      $data['page_title'] = 'Register Account | Personal Blog';
      $resu = $this->Load_model("user");
      showPrint($resu);
      // if($_SERVER['REQUEST_METHOD'] == 'POST') {
      //   $userModel = $this->model("user"); 
      //   //$result = $userModel->register_USER($_POST);  
      //   showPrint($userModel); 
      // }
      return $this->view("theme","register", $data); 
    }

    public function Load_model($model)
  {
    $FILENAME = "../app/models/". ucfirst($model). ".php";
    if (file_exists($FILENAME)) {

      require $FILENAME;
      $model = new $model();
    }   
    // return false; 
  }
  }