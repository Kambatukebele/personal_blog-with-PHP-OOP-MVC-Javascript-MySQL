<?php

  class Register extends Controller {

    public function index()
    {
      $data['page_title'] = 'Register Account | Personal Blog';
      return $this->view("theme","register", $data); 
    }
  }