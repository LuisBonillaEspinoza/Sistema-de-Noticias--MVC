<?php

class Router extends Url {
  
  protected $controller;
  protected $method;
  
  public function __construct(){  
    $urlClass= new Url();
    $url= $urlClass->getUrl();
    $session= new Sessions();
    
    $this->controller= $url[0];
    $this->method= $url[1];
    
    $this->getController($session);
  }
  
  public function getController($sess){
    if(empty($this->controller)){
      $sess->verifySessionEmpty();
      return false;
    }
    
    $fileController= $sess->verifySessionFile($this->controller);
    
    if(file_exists($fileController)){
      require $fileController;
      $controller= new $this->controller;
      
      $this->getUrlMethod($controller);
      
    } else {
      $sess->errorPage();  
    }
  }
  
  public function getUrlMethod($controller){
    if(!empty($this->method)){
      $controller->{$this->method}();
    }
  }
  
}

?>