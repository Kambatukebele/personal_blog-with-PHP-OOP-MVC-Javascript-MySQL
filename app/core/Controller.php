<?php 

class Controller 
{
  public function view(string $file, string $view, array $data = array())
  {
    //calling the views page to display the html content
    
    $FILENAME = "../app/views/" . $file . "/" . $view. ".php";
   
    if (file_exists($FILENAME)) {
      require $FILENAME;
    }else{
      $view = "404";
      $FILENAME = "../app/views/" . $file . "/" . $view . ".php";
      echo $FILENAME; 
      require $FILENAME;
    }

  }

  private function model($model)
  {
    $FILENAME = "../app/models/". $model. ".php";
    if (file_exists($FILENAME)) {
      require $FILENAME;
      $model = new $model;
    }
  }
}