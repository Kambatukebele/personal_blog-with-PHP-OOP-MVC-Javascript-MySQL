<?php
  class App 
  {
    private $controller = "home"; 
    private $method = "index";
    private $params;


    public function __construct()
    {
      //Capturing the link from the function getURL and assign to a variable URL
      $url = $this->getURL();

      //Checking if the page from $url[0] exist, otherwise return _404 error page
      $this->controller = $url[0]; 
      
      $fileName = "../app/controllers/" . $this->controller. ".php";
      if (file_exists($fileName))
      {
        require $fileName;        
      }else{
        $this->controller = "_404";
        $fileName = "../app/controllers/" . $this->controller. ".php";
        require $fileName;  
      }

      $this->controller = new $this->controller;
      unset($url[0]);
      
      // Checking if the method of the selected page exist
      if(isset($url[1]))
      {
        if(method_exists($this->controller, $url[1]))
        {
          $this->method = $url[1];
        }
      }

      unset($url[1]); 

      $this->params = (count($url) > 1) ? $url : ["home"];

      call_user_func_array([$this->controller, $this->method], $this->params); 

    }

    private function getURL ()
    {
      /**Capturing email from the search bar with the help of the super global GET
       * the variable $URL return a string, so we have to turn it to an array with the explode function and trim it as well
      */
      $URL = isset($_GET['url']) ? filter_var($_GET['url'], FILTER_SANITIZE_URL) : "home"; 
      $URL = explode("/", trim($URL, "/"));
      
      return $URL; 
  
    }
  }