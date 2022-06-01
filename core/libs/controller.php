<?php

class Controller {

  public function __construct(){
    $this->view= new View();
  }
  
  public function requireModel($model){
    require_once 'app/models/userModels/'.$model.'.php';
    $modelName= new $model();
    return $modelName;
  }
  
  public function requireModelAdmin($model){
    require_once 'app/models/adminModels/'.$model.'.php';
    $modelName= new $model();
    return $modelName;
  }
  

}

?>