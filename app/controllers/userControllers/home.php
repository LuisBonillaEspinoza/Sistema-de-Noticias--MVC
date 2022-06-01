<?php

class Home extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('home/index');
  }
  
}

?>